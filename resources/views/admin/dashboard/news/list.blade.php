@extends('layouts.admin')
@section('title', 'Новости')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Менеджер новости /</span> Список новости
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
                        @livewire('news-list-component')
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection