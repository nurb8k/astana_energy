@extends('layouts.app')
@section('title', 'План закупок')
@section('content')
    <section class="report">
        <div class="container-md">
            <div class="container-md">
                <h2>{{__('messages.buy_plan')}}</h2>

            </div>

            <div class="docs__items">
                <div class="docs">
                    <img src="{{asset('user/assets/img/excel.jpg')}}" style="width: 26px;height: 26px">
                    <div class="docs__property">
                        <a class="docs__title" href="{{asset('user/assets/files/План государственных закупок на 2024г.xlsx')}}">План государственных закупок на 2024 г</a>
                        <p class="docs__file-text">XLSX (914 KB)</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection