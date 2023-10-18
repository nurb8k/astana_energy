@extends('layouts.admin')
@section('title', 'Новости')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <style>
            [type="date"] {
                background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
            }
            [type="date"]::-webkit-inner-spin-button {
                display: none;
            }
            [type="date"]::-webkit-calendar-picker-indicator {
                opacity: 0;
            }

            /* custom styles */
            body {
                padding: 4em;
                background: #e5e5e5;
                font: 13px/1.4 Geneva, 'Lucida Sans', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
            }
            label {
                display: block;
            }
            input {
                border: 1px solid #c4c4c4;
                border-radius: 5px;
                background-color: #fff;
                padding: 3px 5px;
                box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
                width: 190px;
            }
        </style>
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Новости /</span> Добавить новости
        </h4>
        <div class="row">
            <!-- FormValidation -->
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Форма для создание новости</h5>
                    <div class="card-body">
                        <form action="{{route('admin.dashboard.news.store')}}" method="post" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" novalidate="novalidate">
                           @csrf
                            <div class="col-12">
                                <h6 class="mt-2">1. Заголовок новости</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Заголовок на казахском</label>
                                <input type="text"  required class="form-control" name="title_kz">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Заголовок на русском</label>
                                <input type="text"  class="form-control" required name="title_ru">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <h6 class="mt-2">2. Описание новости (текст новости)</h6>
                                <hr class="mt-0">
                            </div>

                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Описание на казахском</label>
                                <textarea class="form-control"  required name="desc_kz" rows="10"></textarea>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Описание на казахском</label>
                                <textarea class="form-control" required name="desc_ru" rows="10"></textarea>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <h6 class="mt-2">3. Фото новости (на всех языках одинаково)</h6>
                                <hr class="mt-0">
                            </div>

                            <div class="col-md-12 fv-plugins-icon-container">
                                <label for="formValidationFile" class="form-label">Фото новости</label>
                                <input class="form-control" type="file" id="formValidationFile" name="image">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>

                            <div class="col-md-12 fv-plugins-icon-container">
                                <label for="formValidationFile" class="form-label">Дата новости</label>
                                <input type="date" class="input" name="time_publish" id="dateofbirth">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="submitButton" class="btn btn-primary">Создать</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection