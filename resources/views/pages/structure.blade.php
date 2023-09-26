@extends('layouts.app')

@section('title','Пресс-центр' )
@section('content')
    <div class="header">
        <img class="header__bg" src="{{ asset('images/bg_1.jpg') }}" style="filter:brightness(85%)" alt="bg photo">
        <p class="header__news-header">Структура компании</p>
    </div>
    <div class="breadcrumbs">
        <a class="breadcrumb" href="#">О компании</a> /
        <span>Структура компании</span>
    </div>
    <div class="content">
        <img src="{{ asset('images/logos/struc.png') }}" style="width:100%" alt="">
    </div>

@endsection