@extends('layouts.admin')
@section('title', 'список инфографики')
@section('content')
    <link rel="stylesheet" href="{{asset('user/assets/css/infographic-page.css')}}">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Управление инфографикой/</span> список инфографики
        </h4>
        @if(session('success'))
            <div class="btn btn-success">
                Новости успешно добавлен
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @livewire('infographic-list-component')
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection