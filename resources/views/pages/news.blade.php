@extends('layouts.app')
@section('title', 'Новости')

@section('content')

    <main>
        <section class="single-news">
            <div class="container-md">
                <div class="single-news-inner">
                    <div class="single-news-preview" style="background-image: url({{asset('./user/assets/img/news-single.png')}});"></div>
                    <div class="single-news-article">
                        <h3>5 сентября – День языков народа Казахстана!</h3>
                        <div class="single-news-date">Опубликовано: 05.09.2023 г.</div>
                        <p class="single-news-description">
                            Сегодня 5 сентября 2023 года в АО «Астана-Энергия» прошло мероприятие, посвященное празднику языка с участием руководителей и сотрудников ТЭЦ-1, ТЭЦ-2, структурных подразделений Общества. <br>
                            Сегодняшний вечер был посвящен 130-летию известного деятеля движения «Алаш», выдающегося поэта, педагога, психолога, журналиста, общественного деятеля Магжана Бекеновича Жумабаева. В ходе мероприятия были показаны специальные ролики с избражени...
                        </p>
                        <a href="#" class="btn btn-outline btn-icon-right btn-hover-fil">
                            <span>Подробнее</span>
                            <svg class="btn-icon" width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0L0 9Z" fill="#F29646"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="news">
            <div class="container-md">
                <div class="news-inner">
                    <div class="news-article">
                        <h3 class="text-blue text-center">Все новости</h3>
                    </div>
                    <div class="news-list">
                        <div class="news-item bg-grey">
                            <div class="news-item-preview" style="background-image: url({{asset('user/assets/img/news-1.png')}});"></div>
                            <div class="news-item-article">
                                <h5 class="news-item-title">Об изменении тарифа на производство тепловой энергии с 1 октября 2023 года.</h5>
                                <div class="news-item-date">24 августа 2023 </div>
                                <a href="#" class="detail-link">
                                    <span>Перейти</span>
                                    <img src="{{asset('/user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                </a>
                            </div>
                        </div>
                        <div class="news-item bg-grey">
                            <div class="news-item-preview" style="background-image: url({{asset('user/assets/img/news-1.png')}});"></div>
                            <div class="news-item-article">
                                <h5 class="news-item-title">Об изменении тарифа на производство тепловой энергии с 1 октября 2023 года.</h5>
                                <div class="news-item-date">24 августа 2023 </div>
                                <a href="#" class="detail-link">
                                    <span>Перейти</span>
                                    <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                </a>
                            </div>
                        </div>
                        <div class="news-item bg-grey">
                            <div class="news-item-preview" style="background-image: url({{asset('user/assets/img/news-1.png')}});"></div>
                            <div class="news-item-article">
                                <h5 class="news-item-title">Об изменении тарифа на производство тепловой энергии с 1 октября 2023 года.</h5>
                                <div class="news-item-date">24 августа 2023 </div>
                                <a href="#" class="detail-link">
                                    <span>Перейти</span>
                                    <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                </a>
                            </div>
                        </div>
                        <div class="news-item bg-grey">
                            <div class="news-item-preview" style="background-image: url({{asset('user/assets/img/news-1.png')}});"></div>
                            <div class="news-item-article">
                                <h5 class="news-item-title">Об изменении тарифа на производство тепловой энергии с 1 октября 2023 года.</h5>
                                <div class="news-item-date">24 августа 2023 </div>
                                <a href="#" class="detail-link">
                                    <span>Перейти</span>
                                    <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection