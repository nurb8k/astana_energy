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
                        <a class="docs__title" href="{{asset('user/assets/files/changes.xlsx')}}">План государственных закупок с учетом изменений и дополнений на 23.09.2022</a>
                        <p class="docs__file-text">XLSX (914 KB)</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection