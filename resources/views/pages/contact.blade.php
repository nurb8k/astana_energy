@extends('layouts.app')
@section('title', 'Контакты')

@section('content')

    <main>
        <section class="contact">
            <div class="contact-inner">
                <div class="contact-left">
                    <div class="contact-article">
                        <p class="contact-addr">"Астана-Энергия" акционерлік қоғамы</p>
                        <p class="contact-description">{{__('messages.address')}}</p>
                    </div>
                    <div class="contact-map">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A82b2bc384cfb703c5aa954b94af4cc58ad92a36df1365e9d77f129d4b7968273&amp;source=constructor" width="400" height="300" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="contact-right">
                    <form class="contact-form">
                        <div class="contact-form-top">
                            <div class="form-group">
                                <input type="text" placeholder="{{__('messages.fio')}}">
                            </div>
                            <div class="form-group">
                                <input type="phone" placeholder="+7 (___) ___-__-__">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="e-mail">
                            </div>
                        </div>

                        <div class="form-group form-group-upload">
                            <label class="form-group-file">
                                <input type="file" style="display: none;">
                                <img src="{{asset('user/assets/img/icons/upload.svg')}}" alt="Upload icon" class="form-group-file-icon">
                                <span>{{__('messages.upload_file')}}</span>
                            </label>
                            <label class="form-group-upload-label">
                                {{__('messages.contacts_file_text')}}
                            </label>
                        </div>

                        <div class="form-group form-group-check">
                            <label class="form-group-check-input">
                                <input style="display: none;" type="checkbox" id="ag">
                                <span></span>
                            </label>
                            <label for="ag" class="form-group-check-label text-primary">
                                {{__('messages.contacts_info')}}
                            </label>
                        </div>
                        <button class="btn">{{__('messages.send_apply')}}</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

@endsection