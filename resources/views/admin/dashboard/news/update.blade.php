@extends('layouts.admin')
@section('title', 'Новости')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tiny.cloud/1/xis0mu4j2hn3400rjuju6oa431eum7in53zvdivpu6l5qp8z/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/buffer.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/filetype.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Менеджер новости /</span> Изменить новости
        </h4>
        @if(session('success'))
            <div class="btn btn-success">
                Новости успешно обновлен
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Форма для создания новости</h5>
                    <div class="card-body">
                        <form action="{{route('admin.news.update')}}" method="post" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="news_id" value="{{$news->id}}">
                            <div class="col-12">
                                <h6 class="mt-2">1. Заголовок новости</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Заголовок на казахском</label>
                                <input type="text"  required class="form-control" name="title_kz" value="{{$news->title_kz}}">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label" >Заголовок на русском</label>
                                <input type="text"  class="form-control" required name="title_ru" value="{{$news->title_ru}}">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <h6 class="mt-2">2. Описание новости (текст новости)</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label">Описание на казахском</label>
                                <textarea id="desckz" class="form-control mytextarea" required name="desc_kz" rows="20">{!! $news->desc_kz !!}</textarea>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 fv-plugins-icon-container">
                                <label class="form-label">Описание на русском</label>
                                <textarea id="descru" class="form-control mytextarea" required name="desc_ru" rows="20">{!! $news->desc_ru !!}</textarea>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>

                            <div class="col-12">
                                <h6 class="mt-2">3. Фото новости (на всех языках одинаково)</h6>
                                <hr class="mt-0">
                            </div>

                            <div class="col-md-12 fv-plugins-icon-container">
                                <label for="formValidationFile" class="form-label">Текущий фото новости, <strong class="text-primary"> если хотите заменить загрузите новый </strong>, если хотите оставить фоту не ничего не загрузите!</label>
                                <br>
                                    @if($news->image)
                                        <img class="news-img" style="width: 300px; margin-bottom: 10px;margin-top: 10px;" src="{{asset('storage/' . $news->image)}}" alt="news img">
                                    @else
                                        <p class="text-warning">Фото не загружена</p>
                                    @endif
                                <br>
                                <input class="form-control" type="file" accept="image/png, image/jpeg, image/webp, image/jpg, image/svg" name="image">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>


                            <div class="col-12">
                                <h6 class="mt-2">4. Внутренний слайдер из фотографии (на всех языках одинаково)</h6>
                                <hr class="mt-0">
                            </div>

                            <div class="col-md-12 fv-plugins-icon-container">
                                <div class="preview-images-zone d-flex" style="flex-wrap:wrap;gap: 20px">
                                    @if($news->images)
                                        @foreach($news->images as $image)
                                            <div style="width: 140px;">
                                                <img style="width: 140px" id="pro-img-{{ $image->id }}" src="{{ asset('storage/images/' . $image->path) }}">
                                                <div class="d-flex justify-content-center mt-4">
                                                    <button type="button" class="btn btn-sm btn-outline-danger delete-image" data-image-id="{{ $image->id }}">Удалить</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="col-12">
                                <h6 class="mt-2">Теги</h6>
                                <hr class="mt-0">
                            </div>

                            <div class="d-flex m-2" style="gap:40px;flex-wrap:wrap">
                                 @foreach($tags as $tag)
                                    <div class="form-check">
                                        @if($news->tags->contains($tag->id))
                                        <input checked class="form-check-input" name="tag[]" type="checkbox" value="{{$tag->id}}" >
                                        <label class="form-check-label">
                                            {{$tag->name}}
                                        </label>
                                        @else
                                            <input class="form-check-input" name="tag[]" type="checkbox" value="{{$tag->id}}">
                                            <label class="form-check-label">
                                                {{$tag->name}}
                                            </label>
                                        @endif
                                    </div>
                                 @endforeach
                            </div>
                            <div class="col-12">
                                <h6 class="mt-2">5. Добавить в топ новости?</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="d-flex m-2" style="gap:40px;flex-wrap:wrap">
                                <div class="form-check">
                                        <input class="form-check-input" @if($news->is_popular) checked @endif name="popular" type="checkbox">
                                        <label class="form-check-label">
                                            Топ новости
                                        </label>

                                </div>
                            </div>
                            <div class="col-md-12 fv-plugins-icon-container">
                                <label for="formValidationFile" class="form-label">Дата новости</label>
                                <input type="text" class="input form-control" name="time_publish" value="{{$news->time_publish}}">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="submitButton" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        tinymce.init({
            selector: 'textarea.mytextarea',
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

    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        const pond = FilePond.create({
            files: [
                {
                    // the server file reference
                    source: '12345',

                    // set type to limbo to tell FilePond this is a temp file
                    options: {
                        type: 'limbo',
                    },
                },
            ],
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.delete-image').on('click', function() {
                var imageId = $(this).data('image-id');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    url: '{{ route("admin.news.img.destroy", ["id" => ":id"]) }}'.replace(':id', imageId),
                    type: 'post',
                    dataType: 'json',


                    success: function(response) {
                        if (response.success) {
                            // Remove the deleted image container from the DOM
                            $('#pro-img-' + imageId).parent().remove();
                        } else {
                            alert('Failed to delete image.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Error occurred while deleting image.');
                    }
                });
            });
        });
    </script>



@endsection