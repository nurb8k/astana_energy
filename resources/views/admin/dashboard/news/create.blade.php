
@extends('layouts.admin')
@section('title', 'Новости')
@section('content')
    <style>
        .preview-images-zone {
            width: 100%;
            border: 1px solid #ddd;
            min-height: 180px;
            /* display: flex; */
            padding: 5px 5px 0px 5px;
            position: relative;
            overflow:auto;
        }
        .preview-images-zone > .preview-image:first-child {
            height: 185px;
            width: 185px;
            position: relative;
            margin-right: 5px;
        }
        .preview-images-zone > .preview-image {
            height: 90px;
            width: 90px;
            position: relative;
            margin-right: 5px;
            float: left;
            margin-bottom: 5px;
        }
        .preview-images-zone > .preview-image > .image-zone {
            width: 100%;
            height: 100%;
        }
        .preview-images-zone > .preview-image > .image-zone > img {
            width: 100%;
            height: 100%;
        }
        .preview-images-zone > .preview-image > .tools-edit-image {
            position: absolute;
            z-index: 100;
            color: #fff;
            bottom: 0;
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
            display: none;
        }
        .preview-images-zone > .preview-image > .image-cancel {
            font-size: 18px;
            position: absolute;
            top: 0;
            right: 0;
            font-weight: bold;
            margin-right: 10px;
            cursor: pointer;
            display: none;
            z-index: 100;
        }
        .preview-image:hover > .image-zone {
            cursor: move;
            opacity: .5;
        }
        .preview-image:hover > .tools-edit-image,
        .preview-image:hover > .image-cancel {
            display: block;
        }
        .ui-sortable-helper {
            width: 90px !important;
            height: 90px !important;
        }

        .container {
            padding-top: 50px;
        }
    </style>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Менеджер новости /</span> Добавить новости
        </h4>
        @if(session('success'))
            <div class="btn btn-success">
                Новости успешно добавлен
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Форма для создания новости</h5>
                    <div class="card-body">
                        <form id="upload-form" action="{{route('admin.news.store')}}" method="post" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data" novalidate="novalidate">
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
                                <textarea id="mytextarea" class="form-control mytextarea" required name="desc_kz" rows="20" ></textarea>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Описание на русском</label>
                                <textarea class="form-control" required name="desc_ru" rows="20"></textarea>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <h6 class="mt-2">3. Главный фото новости (на всех языках одинаково)</h6>
                                <hr class="mt-0">
                            </div>

                            <div class="col-md-12 fv-plugins-icon-container">
                                <label for="formValidationFile" class="form-label">Фото новости</label>
                                <input class="form-control" type="file" accept="image/png, image/jpeg, image/webp, image/jpg, image/svg" id="formValidationFile" name="image">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>

                            <div class="col-12">
                                <h6 class="mt-2">4. Внутренней фото новости (слайдер)</h6>
                                <hr class="mt-0">
                            </div>

                            <div class="col-md-12 fv-plugins-icon-container">
                                <label for="formValidationFile" class="form-label">
                                    Загружайте фото с <strong class="text-primary">CTRL (macOS command)</strong>
                                </label>

                                    <fieldset class="form-group">
                                        <label class="btn btn-primary">
                                            Загрузить фото
                                            <input type="file" id="pro-image" name="photos[]" style="display: none;" multiple>
                                        </label>
                                    </fieldset>
                                    <div class="preview-images-zone">

                                    </div>


                            </div>


                            <div class="col-12">
                                <h6 class="mt-2">5. Теги</h6>
                                <hr class="mt-0">
                            </div>

                            <div class="d-flex m-2" style="gap:40px;flex-wrap:wrap">
                                @foreach($tags as $tag)
                                    <div class="form-check">
                                        <input class="form-check-input" name="tag[]" type="checkbox" value="{{$tag->id}}" >
                                        <label class="form-check-label">
                                            {{$tag->name}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="col-12">
                                <h6 class="mt-2">6. Добавить в топ новости?</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="d-flex m-2" style="gap:40px;flex-wrap:wrap">
                                <div class="form-check">
                                    <input class="form-check-input" name="popular" type="checkbox">
                                    <label class="form-check-label">
                                        Топ новости
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <h6 class="mt-2">7. Дата новости</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-md-2 fv-plugins-icon-container">
                                <label for="formValidationFile" class="form-label"></label>
                                <input type="date" class="input form-control" name="time_publish">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Создать новости</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
    <script>
        $(document).ready(function() {
            document.getElementById('pro-image').addEventListener('change', readImage, false);

            $(".preview-images-zone").sortable();

            $(document).on('click', '.image-cancel', function() {
                let no = $(this).data('no');
                $(".preview-image.preview-show-" + no).remove();
            });
        });

        var num = 4;

        function readImage() {
            if (window.File && window.FileList && window.FileReader) {
                var files = event.target.files; // FileList object
                var output = $(".preview-images-zone");

                for (let i = 0; i < files.length; i++) {
                    var file = files[i];
                    if (!file.type.match('image')) continue;

                    var picReader = new FileReader();

                    picReader.addEventListener('load', function(event) {
                        var picFile = event.target;
                        var html = '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '</div>';

                        output.append(html);
                        num = num + 1;
                    });

                    picReader.readAsDataURL(file);
                }
                // $("#pro-image").val('');
            } else {
                console.log('Browser does not support');
            }
        }

    </script>
@endsection