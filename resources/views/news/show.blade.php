@extends('layouts.app')

@section('title','Новости')
@section('content')
    <div class="header">
       <img class="header__bg" src="{{ asset('images/news.png') }}" alt="bg photo">
       <p class="header__news-header">{{$news->title_ru}}</p>
    </div>
    <div>
        <p style="margin-left: 460px; margin-top: 20px; font-weight: 400; font-size: 19px"><a href="{{route('press.index')}}">Пресс-центр</a> /
        <a href="{{route('news.index')}}">Новости</a> / <a href="{{route('news.show', $news->id)}}">{{$news->title_ru}}</a> </p>
    </div>
    <div class="content">
        <div style="display: flex;justify-content:center; margin-bottom: 50px;">
            <img style="width: 450px;"  src="{{asset($news->post_image)}}" alt="">
        </div>
        <div class="news__content-text">
        {!! $news->text_ru !!}
        </div>
    </div>
    <div class="content">
        <p class="content__title">Другие новости</p>
        <div class="our_news__block">
            @foreach($randomNews = \App\Models\News::where('id', '!=', $news->id)
                        ->inRandomOrder()
                        ->take(4)
                        ->get() as $news)
                <a href="{{route('news.show',$news->id)}}" class="our_news__item">
                    <img class="news__img" src="{{asset($news->post_image)}}" alt="sample news bg">
                    <p class="news__title">{{$news->title_ru}}</p>
                    <p class="news__date">{{$news->created_at->formatLocalized('%d %B %Y', 'uz')}}</p>
                </a>
            @endforeach

        </div>
    </div>

@endsection