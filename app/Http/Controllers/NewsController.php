<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $latest_news = News::latest('time_publish')->first();
        $other_news = News::where('id','!=',$latest_news->id)->take(4)->get();
        $pop_news = News::where('id','!=',$latest_news->id)->get();
        return view('pages.news.index',['latest' => $latest_news,'other_news' => $other_news,'pop_news' => $pop_news]);
    }

    public function create()
    {
        return view('admin.dashboard.news.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title_kz' => 'required',
            'title_ru' => 'required',
            'desc_kz' => 'required',
            'desc_ru' => 'required',
            'time_publish' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public');
        }

        News::create([
            'title_kz' => $request->input('title_kz'),
            'title_ru' => $request->input('title_ru'),
            'desc_kz' => $request->input('desc_kz'),
            'desc_ru' => $request->input('desc_ru'),
            'time_publish' => $request->input('time_publish'),
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.dashboard.news.index')->with('success', 'News item created successfully');
    }


    public function show($id)
    {
       $news = News::findOrFail($id);
       $other_news = News::where('id','!=',$news->id)->take(4)->get();
       return view('pages.news.show', compact('news','other_news'));
    }
}
