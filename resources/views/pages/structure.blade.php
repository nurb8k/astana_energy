@extends('layouts.app')

@section('title','Пресс-центр' )
@section('content')
    <div class="header">
        <img class="header__bg" src="{{ asset('images/bg_1.jpg') }}" style="filter:brightness(85%)" alt="bg photo">
        <p class="header__news-header">Структура компании</p>
    </div>
    <div>
        <p style="margin-left: 460px; margin-top: 20px; font-weight: 400; font-size: 19px"><a href="#">О компании</a> / <a href="#">Структура компании</a> </p>
    </div>
    <div class="content">
        <img src="{{ asset('images/logos/struc.png') }}" style="width:100%" alt="">
    </div>

@endsection