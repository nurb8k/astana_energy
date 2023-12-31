<?php

namespace App\Livewire;

use App\Models\News;
use App\Models\Tag;
use Livewire\Component;

class NewsComponent extends Component
{

    public $date;
    public $tag;
    public $perPage = 4;
    public $noMore = false;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function loadMore()
    {
        $this->perPage += 4;
    }
    public function render()
    {
        $latest_news = News::latest('time_publish')->first();
        $tags = Tag::query()->get();

        $other_news = News::query()
            ->where('id','!=',$latest_news->id);

        if ($this->date) {
            $other_news->where('time_publish', '=', $this->date);
        }
        if ($this->tag) {
            $other_news->whereHas('tags', function ($query) {
                $query->where('id', '=', $this->tag);
            });
        }
        if($this->perPage > $other_news->count()){
            $this->noMore = true;
        }
        $other_news = $other_news->paginate($this->perPage);


        $pop_news = News::where('is_popular', 1)->get();

        return view('livewire.news.index',['latest' => $latest_news,'other_news' => $other_news,'pop_news' => $pop_news,'noMore' => $this->noMore,'tags' => $tags]);
    }
}
