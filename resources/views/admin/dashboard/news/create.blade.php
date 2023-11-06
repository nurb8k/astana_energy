@extends('layouts.admin')
@section('title', 'Новости')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Новости /</span> Добавить новости
        </h4>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Форма для создания новости</h5>
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
                                <label class="form-label" >Описание на русском</label>
                                <textarea class="form-control" required name="desc_ru" rows="10"></textarea>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <h6 class="mt-2">3. Фото новости (на всех языках одинаково)</h6>
                                <hr class="mt-0">
                            </div>

                            <div class="col-md-12 fv-plugins-icon-container">
                                <label for="formValidationFile" class="form-label">Фото новости</label>
                                <input class="form-control" type="file" accept="image/png, image/jpeg, image/webp, image/jpg, image/svg" id="formValidationFile" name="image">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>

                            <div class="col-12">
                                <h6 class="mt-2">4. Фоты новости (на всех языках одинаково)</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-md-12 fv-plugins-icon-container">
                                <label for="formValidationFile" class="form-label">Дата новости</label>
                                <input type="date" class="input form-control" name="time_publish" id="dateofbirth">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        // ----------multiplefile-upload---------
        $("#multiplefileupload").fileinput({
            'theme': 'fa',
            'uploadUrl': '#',
            showRemove: false,
            showUpload: false,
            showZoom: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            browseLabel: "",
            browseIcon: "<i class='fa fa-plus'></i>",
            overwriteInitial: false,
            initialPreviewAsData: true,
            fileActionSettings :{
                showUpload: false,
                showZoom: false,
                removeIcon: "<i class='fa fa-times'></i>",
            }
        });

    </script>
@endsection