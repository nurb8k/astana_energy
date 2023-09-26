@extends('layouts.app')

@section('title','Новости' )
@section('content')

    <div class="header">
        <img class="header__bg" src="{{ asset('images/news.png') }}" alt="bg photo">
        <p class="header__title">Новости</p>
        <div class="header__sub-titles">
            <p class="header__sub-title">Пресс-центр</p>
            <p class="header__sub-title">События</p>
        </div>
    </div>
    <div class="content">
        <p class="content__title">Новости АО “Астана Энергия”</p>
        <div class="our_news__block">
            @foreach(App\Models\News::all() as $news)
                <a href="{{route('news.show',$news->id)}}" class="our_news__item">
                    <img class="news__img" src="{{asset($news->post_image)}}" alt="sample news bg">
                    <p class="news__title">{{$news->title_ru}}</p>
                    <p class="news__date">{{$news->created_at->format('M D Y')}}</p>
                </a>
            @endforeach

        </div>
    </div>

@endsection