@extends('layouts.app')
@section('title', 'Контакты')

@section('content')
    <main>
        <section class="contact">
            <div class="contact-inner">
                <div class="contact-left">
                    <div class="contact-article">
                        <p class="contact-addr">{{__('messages.astana_ao')}}</p>
                        <p class="contact-description">{{__('messages.address')}}</p>
                    </div>
                    <div class="contact-map">
                        <iframe src="https://yandex.com/map-widget/v1/?ll=71.509183%2C51.191777&mode=search&oid=45901301300&ol=biz&sctx=ZAAAAAgBEAAaKAoSCfFmDd5XtSVAEXmxMEROl0hAEhIJ9N4YAoCNX0ARgBE0ZhJhSUAiBgABAgMEBSgKOABAkE5IAWoCcnWdAc3MTD2gAQCoAQC9ASxRlovCAQa0jLn%2FqgHqAQDyAQD4AQCCAnAwMTAwMDAsINCg0LXRgdC%2F0YPQsdC70LjQutCwINCa0LDQt9Cw0YXRgdGC0LDQvSDQsy4g0JDRgdGC0LDQvdCwLCDCq9CR0LDQudKb0L7So9GL0YDCuyDQn9GA0L7QvNC30L7QvdCwINCi0K3Qpi0yigIAkgIDMTYzmgIMZGVza3RvcC1tYXBz&sll=71.509183%2C51.191777&sspn=0.015407%2C0.005899&text=010000%2C%20%D0%A0%D0%B5%D1%81%D0%BF%D1%83%D0%B1%D0%BB%D0%B8%D0%BA%D0%B0%20%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD%20%D0%B3.%20%D0%90%D1%81%D1%82%D0%B0%D0%BD%D0%B0%2C%20%C2%AB%D0%91%D0%B0%D0%B9%D2%9B%D0%BE%D2%A3%D1%8B%D1%80%C2%BB%20%D0%9F%D1%80%D0%BE%D0%BC%D0%B7%D0%BE%D0%BD%D0%B0%20%D0%A2%D0%AD%D0%A6-2&z=17"  width="400" height="300" frameborder="0"></iframe>
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