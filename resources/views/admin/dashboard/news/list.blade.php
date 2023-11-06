@extends('layouts.admin')
@section('title', 'Новости')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Новости /</span> Список новости
        </h4>
        <div class="row">

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