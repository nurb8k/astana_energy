@extends('layouts.admin')
@section('title', 'Админ панель')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Добро пожаловать на админку Astana Energy </h5>
                                <p class="mb-4">
                                   Сегодня: {{Carbon\Carbon::now()->format('d.m.Y')}}
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img
                                        src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}"
                                        height="140"
                                        alt="View Badge User"
                                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="d-block mb-1">Последний инфографика:</span>
                                <h3 class="card-title text-nowrap mb-2">{{$lastInfo->date->format('d.m.y')}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="d-block mb-1">Количества инфографика</span>
                                <h3 class="card-title text-nowrap mb-2">{{$countInfo}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection