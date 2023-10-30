@extends('layouts.app')
@section('title', $news->title_ru)
<link rel="stylesheet" href="{{asset('user/assets/css/news-page.css')}}">
<link rel="stylesheet" href="{{asset('user/assets/css/news-show.css')}}">
@section('content')
    <main>
        <section class="news-show">
            <div class="news-inner">
                <h3 class="news-title">{{$news->title}}</h3>
                <div class="news-date">{{__('messages.published')}}: {{ \Carbon\Carbon::parse($news->time_publish)->format('d.m.Y') }}
                    г.</div>
                <img class="news-img" src="{{asset('storage/' . $news->image)}}" alt="news img">
                <p class="news-text">{!! $news->desc !!}</p>
            </div>
        </section>
        <section class="news">
            <div class="container-md">
                <div class="other_news_inner">
                    <div class="news-article">
                        <h3 class="text-blue text-center">{{__('messages.other_news')}}</h3>
                    </div>
                    <div class="news-list">
                        @foreach($other_news as $on)
                            <div class="news-item bg-grey">
                                <div class="news-item-preview" style="background-image: url({{asset('storage/' . $on->image)}});"></div>
                                <div class="news-item-article">
                                    <h5 class="news-item-title">{{ Str::limit($on->title_ru, 40, '...') }}</h5>
                                    <div class="news-item-date">{{ $on->publish }} г</div>
                                    <a href="{{route('news.show',$on->id)}}" class="detail-link">
                                        <span>{{__('messages.open')}}</span>
                                        <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
