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
                            В конце декабря 1961 года была
                            введена Акмолинская ТЭЦ-1 с пуском
                            в эксплуатацию первой турбины и первого
                            котла.
                        </p>
                    </div>
                    <div class="about-history-item bg-grey">
                        <h2 class="text-blue">1971</h2>
                        <p>
                            29 июня 1971 года было принято
                            специальное решение Министерства
                            энергетики СССР по разработке
                            технического проекта Целиноградской ТЭЦ-2.
                        </p>
                    </div>
                    <div class="about-history-item bg-grey">
                        <h2 class="text-blue">2004</h2>
                        <p>
                            04 ноября 2004 года ГУ «Департамент
                            юстиции г.Астаны» регистрационным номером
                            №17550-1901-АО была произведена
                            государственная регистрация АО «Астана-Энергия»
                            в качестве юридического лица.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="us-history">
            <div class="container-md">
                <div class="us-history-inner bd-primary">
                    <p>
                        <b>Наша история</b> <br>
                        В конце декабря 1961 года была введена Акмолинская ТЭЦ-1 с пуском в эксплуатацию первой турбины и первого котла. Этот факт ста...
                    </p>
                    <a href="#" class="btn btn-outline btn-icon-right btn-hover-fil">
                        <span>Читать все</span>
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
                        <h3>Руководство</h3>
                    </div>
                    <div class="managment-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide managment-slider-item">
                                <div class="managment-slider-item-preview">
                                    <img src="{{asset('user/assets/img/seo-1.png')}}" alt="">
                                </div>
                                <div class="managment-slider-item-article">
                                    <h4>Жетписов Сагатбек Идирисович</h4>
                                    <p>Заместитель Председателя <br> Правления по снабжению</p>
                                </div>
                            </div>

                            <div class="swiper-slide managment-slider-item">
                                <div class="managment-slider-item-preview">
                                    <img src="{{asset('user/assets/img/seo-2.png')}}" alt="">
                                </div>
                                <div class="managment-slider-item-article">
                                    <h4>Гармонщиков Олег Геннадьевич</h4>
                                    <p>Председатель Правления <br> АО "Астана-Энергия"</p>
                                </div>
                            </div>
                            <div class="swiper-slide managment-slider-item">
                                <div class="managment-slider-item-preview">
                                    <img src="{{asset('user/assets/img/seo-3.png')}}" alt="">
                                </div>
                                <div class="managment-slider-item-article">
                                    <h4>Кажкенов Казбек Алимсуринович</h4>
                                    <p>Председатель Правления <br> АО "Астана-Энергия"</p>
                                </div>
                            </div>

                            <div class="swiper-slide managment-slider-item">
                                <div class="managment-slider-item-preview">
                                    <img src="{{asset('user/assets/img/seo-4.png')}}" alt="">
                                </div>
                                <div class="managment-slider-item-article">
                                    <h4>Шияпов Аслан Жаскайратович</h4>
                                    <p>Заместитель Председателя <br> Правления по экономике и финансам</p>
                                </div>
                            </div>

                            <div class="swiper-slide managment-slider-item">
                                <div class="managment-slider-item-preview">
                                    <img src="{{asset('user/assets/img/seo-5.png')}}" alt="">
                                </div>
                                <div class="managment-slider-item-article">
                                    <h4>Мукашев Адильбек Оралбекулы</h4>
                                    <p>Заместитель Председателя <br> Правления по развитию</p>
                                </div>
                            </div>

                            <div class="swiper-slide managment-slider-item">
                                <div class="managment-slider-item-preview">
                                    <img src="{{asset('user/assets/img/seo-6.jpeg')}}" alt="">
                                </div>
                                <div class="managment-slider-item-article">
                                    <h4>Аскарбеков Уалихан Дайрашевич</h4>
                                    <p>Директор ТЭЦ-2</p>
                                </div>
                            </div>


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
                                    <div class="about-more-comp-preview" style="background-image: url('user/assets/img/comp.png');"></div>
                                    <div class="about-more-article">
                                        <h4>Комплаенс</h4>
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
                                        <a href="#" class="detail-link">
                                            <span>Перейти</span>
                                            <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-group-right">
                            <div class="grid-group-item bg-grey">
                                <a href="#" class="about-more-link">
                                    <h4>Структура компании</h4>
                                    <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="about-more-link-icon">
                                </a>
                            </div>
                            <div class="grid-group-item bg-grey">
                                <a href="#" class="about-more-link">
                                    <h4>Вакансии</h4>
                                    <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="about-more-link-icon">
                                </a>
                            </div>
                            <div class="grid-group-item bg-grey">
                                <a href="#" class="about-more-link">
                                    <h4>Планы закупок</h4>
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
            let managmentSlider = new Swiper(".managment-slider",{
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
        })
    </script>
    </html>
@endsection