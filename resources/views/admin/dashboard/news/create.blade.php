
@extends('layouts.admin')
@section('title', 'Новости')
@section('content')
    <script src="https://cdn.tiny.cloud/1/xis0mu4j2hn3400rjuju6oa431eum7in53zvdivpu6l5qp8z/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/buffer.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/filetype.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
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
                        <form id="upload-form" action="{{route('admin.news.store')}}" method="post" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <h6 class="mt-2">1. Заголовок новости</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Заголовок на казахском</label>
                                <input type="text"   class="form-control" name="title_kz">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Заголовок на русском</label>
                                <input type="text"  class="form-control" name="title_ru">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <h6 class="mt-2">2. Описание новости (текст новости)</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Описание на казахском</label>
                                <textarea id="mytextarea" class="form-control mytextarea"  name="desc_kz" rows="20" ></textarea>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Описание на русском</label>
                                <textarea class="form-control" name="desc_ru" rows="20"></textarea>
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
                                <input type="file" id="images" name="images" multiple />
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
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>

        FilePond.registerPlugin(FilePondPluginImagePreview);
        // Get a reference to the file input element

        const inputElement = document.querySelector('input[id="images"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);
        FilePond.setOptions({
            allowMultiple: true,
            allowReorder: true,

           server: {
               process: '/upload',
               revert: '/delete',
               headers: {
                 'X-CSRF-TOKEN': '{{csrf_token()}}'
               },
           }
        });
    </script>
@endsection