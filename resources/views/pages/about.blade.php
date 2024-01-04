@extends('layouts.app')
@section('title', 'О компании')

@section('content')

    <main>
        <section class="about-history">
            <div class="container-md">
                <div class="about-history-inner">
                    <div class="about-history-item bg-grey">
                        <h2 class="text-blue">1961</h2>
                        <p>
                            {{__('messages.his-1')}}
                        </p>
                    </div>
                    <div class="about-history-item bg-grey">
                        <h2 class="text-blue">1971</h2>
                        <p>
                            {{__('messages.his-2')}}
                        </p>
                    </div>
                    <div class="about-history-item bg-grey">
                        <h2 class="text-blue">2004</h2>
                        <p>
                            {{__('messages.his-3')}}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-history">
            <div class="container-md">
                <div class="us-history-inner bd-primary">
                    <p>
                        <b>{{__('messages.our_his')}}</b> <br>
                        {{__('messages.our_his-text')}}
                    </p>
                    <a href="{{route('history')}}" class="btn btn-outline btn-icon-right btn-hover-fil">
                        <span>{{__('messages.read_all')}}</span>
                        <svg class="btn-icon" width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0L0 9Z" fill="#F29646"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        <section class="managment">
            <div class="container-md">
                <div class="managment-inner bg-grey">
                    <div class="managment-article">
                        <h3>{{__('messages.rukovodstvo')}}</h3>
                    </div>
                    <div class="managment-slider swiper">
                        <div class="swiper-wrapper">
                            @foreach($managers as $m)
                                <div class="swiper-slide managment-slider-item">
                                    <div class="managment-slider-item-preview">
                                        <img src="{{asset($m->image)}}" alt="">
                                    </div>
                                    <div class="managment-slider-item-article">
                                        <h4>{{$m->name}}</h4>
                                        <p>{!! $m->position !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev">
                            <img src="{{asset('user/assets/img/left-btn.svg')}}" alt="" class="swiper-button-icon">
                        </div>
                        <div class="swiper-button-next">
                            <img src="{{asset('user/assets/img/right-btn.svg')}}" alt="" class="swiper-button-icon">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-more">
            <div class="container-md">
                <div class="about-more-inner">
                    <div class="grid-group">
                        <div class="grid-group-left">
                            <div class="grid-group-item bg-grey">
                                <div class="about-more-comp">
                                    <div class="about-more-comp-preview" style="background-image: url('{{asset('user/assets/img/compiance_new.jpeg')}}');"></div>
                                    <div class="about-more-article">
                                        <h4>Комплаенс</h4>
                                        @if(app()->getLocale() == 'kz')
                                            <ul>
                                                <li>
                                                    Комплаенс-офицер қызметінің мақсаты
                                                </li>
                                                <li>
                                                    Тапсырмалар
                                                </li>
                                                <li>
                                                    Сыбайлас жемқорлықтың алдын алу және оған қарсы іс-қимыл жөніндегі шаралар
                                                </li>
                                                <li>
                                                    Құжаттар
                                                </li>
                                            </ul>
                                        @else
                                        <ul>
                                            <li>
                                                Цель деятельности Комплаенс-офицера
                                            </li>
                                            <li>
                                                Задачи
                                            </li>
                                            <li>
                                                Меры по предупреждению и противодействию коррупции
                                            </li>
                                            <li>
                                                Документы
                                            </li>
                                        </ul>
                                        @endif
                                        <a href="{{route('compliance')}}" class="detail-link">
                                            <span>{{__('messages.open')}}</span>
                                            <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-group-right">
                            <div class="grid-group-item bg-grey">
                                <a href="{{route('structure')}}" class="about-more-link">
                                    <h4>{{__('messages.struc')}}</h4>
                                    <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="about-more-link-icon">
                                </a>
                            </div>
                            <div class="grid-group-item bg-grey">
                                <a href="{{route('vacancies')}}" class="about-more-link">
                                    <h4>{{__('messages.vacs')}}</h4>
                                    <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="about-more-link-icon">
                                </a>
                            </div>
                            <div class="grid-group-item bg-grey">
                                <a href="{{route('plan')}}" class="about-more-link">
                                    <h4>{{__('messages.buy_plan')}}</h4>
                                    <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="about-more-link-icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let managmentSlider;

            if (window.innerWidth <= 767) {
                // Mobile configuration
                managmentSlider = new Swiper(".managment-slider", {
                    direction: "horizontal",
                    loop: false,
                    slidesPerView: 1,
                    centeredSlides: true,
                    initialSlide: 0,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    }
                });
            } else {
                // Desktop configuration
                managmentSlider = new Swiper(".managment-slider", {
                    direction: "horizontal",
                    loop: false,
                    slidesPerView: 5,
                    centeredSlides: true,
                    initialSlide: 2,
                    spaceBetween: 40,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    }
                });
            }
        });


    </script>
    </html>
@endsection