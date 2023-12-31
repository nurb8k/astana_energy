@extends('layouts.admin')
@section('title', 'Теги')
@section('content')
    <link rel="stylesheet" href="{{asset('user/assets/css/infographic-page.css')}}">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Менеджер тегов /</span> Список тегов
        </h4>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @livewire('tag-component')
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection