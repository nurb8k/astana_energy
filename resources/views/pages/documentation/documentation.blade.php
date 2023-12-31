@extends('layouts.app')
@section('title', 'Документация')
@section('content')

    <main>
        <section class="documentation">
            <div class="container-md">
                <div class="documentation-inner">
                    <div class="documentation-list">
                        <div class="documentation-item">
                            <img src="{{asset('user/assets/img/document-1.png')}}" alt="" class="documentation-item-preview">
                            <div class="documentation-item-article">
                                <h5 class="text-white">{{__('messages.gos_text')}}</h5>
                                <a href="{{route('goverment')}}" class="btn btn-icon-right">
                                    <span>{{__('messages.open')}}</span>
                                    <svg class="btn-icon" width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0L0 9Z" fill="#FFFFFF"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="documentation-item">
                            <img src="{{asset('user/assets/img/document-2.png')}}" alt="" class="documentation-item-preview">
                            <div class="documentation-item-article">
                                <h5 class="text-white">{{__('messages.gos_text2')}}</h5>
                                <a href="{{route('rules')}}" class="btn btn-icon-right">
                                    <span>{{__('messages.open')}}</span>
                                    <svg class="btn-icon" width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0L0 9Z" fill="#FFFFFF"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection