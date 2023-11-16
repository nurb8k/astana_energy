<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsListComponent extends Component
{
//    use WithPagination;
    public $news;


    public function mount()
    {
        $this->news = News::query()->get();
    }

    public function edit(News $news)
    {
        return redirect()->route('admin.news.edit', ['id' => $news->id]);
    }

    public function delete(News $news)
    {
        $news->delete();

        session()->flash('message', 'Новость успешно удалена!');
        $this->mount();
    }

    public function render()
    {

        return view('livewire.admin.news-list');
    }
}
