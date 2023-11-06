@extends('layouts.admin')
@section('title', 'Инфографика')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">Инфографика
        </h4>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Форма для создания</h5>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="btn btn-success">
                                Инфографика успешно добавлен
                            </div>
                        @endif
                        <form action="{{route('admin.dashboard.infographic.store')}}" method="post" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" novalidate="novalidate">
                           @csrf
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Дата</label>
                                <input type="date" class="input form-control" name="date" id="date">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Отпуск с шин</label>
                                <input type="number" class="form-control" required name="output" id="output">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Законтрактованная</label>
                                <input type="number" class="input form-control" name="contacted" id="contacted">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >На централизованные торги</label>
                                <input type="number"  class="form-control" required name="centred" id="centred">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Свободная</label>
                                <input type="number"  class="form-control" required name="free" id="free">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="submitButton" class="btn btn-primary">Добавить</button>
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