<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsListComponent extends Component
{
    use WithPagination;




    public function edit(News $news)
    {
        return redirect()->route('admin.news.edit', ['id' => $news->id]);
    }

    public function delete(News $news)
    {
        $news->delete();

        session()->flash('message', 'Новость успешно удалена!');
    }

    public function render()
    {
        $news = News::query()->latest()->paginate(10);
        return view('livewire.admin.news-list', compact('news'));
    }
}
