<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsImage;
use App\Models\Tag;
use App\Models\TemporaryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function index()
    {
        $latest_news = News::latest('time_publish')->first();
        $other_news = News::where('id','!=',$latest_news->id)->take(4)->get();
        $pop_news = News::where('is_popular', 1)->get();
        return view('pages.news.index',['latest' => $latest_news,'other_news' => $other_news,'pop_news' => $pop_news]);
    }

    public function list()
    {
        return view('admin.dashboard.news.list');
    }

    public function create()
    {
        $tags = Tag::query()->get();
        return view('admin.dashboard.news.create',compact('tags'));
    }

    public function edit($id)
    {
        $news = News::query()->findOrFail($id);
        $tags = Tag::query()->get();
        return view('admin.dashboard.news.update', compact('news','tags'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'news_id' => 'exists:news,id',
            'title_kz' => 'required',
            'title_ru' => 'required',
            'desc_kz' => 'required',
            'desc_ru' => 'required',
            'time_publish' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg',
            'tag' => 'exists:tags,id',
        ],[
            'title_kz.required' => 'Заголовка на казахском обязательно для заполнения',
            'title_ru.required' => 'Заголовка на русском обязательно для заполнения',
            'desc_kz.required' => 'Описание на казахском обязательно для заполнения',
            'desc_ru.required' => 'Описание на русском обязательно для заполнения',
            'time_publish.required' => 'Дата публикации обязательно для заполнения',
            'time_publish.date' => 'Дата публикации должна быть датой',
            'image.image' => 'image Файл должен быть изображением',
            'image.mimes' => 'image Изображение должно быть в формате jpeg,png,jpg,gif',
            'photos.image' => 'photos Файл должен быть изображением',
            'photos.mimes' => 'Photos Изображение должно быть в формате jpeg,png,jpg,gif',
            'tag.exists' => 'Такого тега не существует',
        ]);

        $news = News::query()->find($request->news_id);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public');
        }

        $news->update([
            'title_kz' => $request->input('title_kz'),
            'title_ru' => $request->input('title_ru'),
            'desc_kz' => $request->input('desc_kz'),
            'desc_ru' => $request->input('desc_ru'),
            'is_popular' => isset($request->popular) ? true : false,
            'time_publish' => $request->input('time_publish'),
            'image' => $request->hasFile('image') ? $imagePath : $news->image,
        ]);
        $tagIds = $request->input('tag');
        $news->tags()->sync($tagIds);

        return redirect()->route('admin.news.edit',$news->id)->with('success','Новости успешно обновлен');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title_kz' => 'required',
            'title_ru' => 'required',
            'desc_kz' => 'required',
            'desc_ru' => 'required',
            'time_publish' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg',
            'tag' => 'exists:tags,id',
        ],[
            'title_kz.required' => 'Заголовка на казахском обязательно для заполнения',
            'title_ru.required' => 'Заголовка на русском обязательно для заполнения',
            'desc_kz.required' => 'Описание на казахском обязательно для заполнения',
            'desc_ru.required' => 'Описание на русском обязательно для заполнения',
            'time_publish.required' => 'Дата публикации обязательно для заполнения',
            'time_publish.date' => 'Дата публикации должна быть датой',
            'image.image' => 'image Файл должен быть изображением',
            'image.mimes' => 'image Изображение должно быть в формате jpeg,png,jpg,gif',
            'photos.image' => 'photos Файл должен быть изображением',
            'photos.mimes' => 'Photos Изображение должно быть в формате jpeg,png,jpg,gif',
            'tag.exists' => 'Такого тега не существует',
        ]);

        $temporaryImages = TemporaryImage::all();

        if ($validator->fails()) {
            foreach ($temporaryImages as $img){
                \Storage::deleteDirectory('images/tmp/'.$img->folder);
                $img->delete();
            }

        }

        $validator->validated();
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public');
        }

        $news = News::create([
            'title_kz' => $request->input('title_kz'),
            'title_ru' => $request->input('title_ru'),
            'desc_kz' => $request->input('desc_kz'),
            'desc_ru' => $request->input('desc_ru'),
            'is_popular' => isset($request->popular) ? true : false,
            'time_publish' => $request->input('time_publish'),
            'image' => $imagePath,
        ]);
        $news->tags()->attach($request->tag);

        # adding images
        foreach($temporaryImages as $img){
            \Storage::copy('images/tmp/' . $img->folder . '/' . $img->name , 'images/' . $img->folder . '/' . $img->name);

            NewsImage::create([
                'news_id' => $news->id,
                'name' => $img->name,
                'order' => $img->order,
                'path' => $img->folder . '/' . $img->name
            ]);
            \Storage::deleteDirectory('images/tmp/'.$img->folder);
            $img->delete();
        }

        return redirect()->route('admin.news.index')->with('success', 'Новости успешно добавлен');
    }


    public function show($id)
    {
       $news = News::query()->findOrFail($id);
       $other_news = News::where('id','!=',$news->id)->take(4)->get();

       return view('pages.news.show', compact('news','other_news'));
    }

    public function imgDelete($id)
    {
        $img = NewsImage::query()->findOrFail($id);
        try {
            \Storage::deleteDirectory('images/tmp/'.$img->folder);
            $img->delete();

            return response()->json(['success' => true]);
        }catch (\Exception $e){
            return response()->json(['success' => false]);
        }

    }


}
