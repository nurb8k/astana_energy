@extends('layouts.app')

@section('title','Главная страница' )
@section('content')
    <main>
        <section class="first-slide">
            <div class="container">
                <div class="first-slide-inner text-white">
                    <div class="first-slide-left">
                        <h1>AO Астана- Энергия</h1>
                        <a href="#" class="btn">Структура компании</a>
                    </div>
                    <div class="first-slide-right">
                        <p>
                            <b>Астана - Энергия</b> - технологический лидер в энергетической сфере Казахстана.
                            Наше стремление к инновациям позволяет нам постоянно повышать эффективность
                            производства и снижать негативное воздействие на окружающую среду.
                        </p>
                    </div>
                    <img src="{{asset('user/assets/img/first-bg.jpg')}}" alt="First slide background image" class="first-slide-bg">
                </div>
            </div>
        </section>
        <section class="director bg-grey">
            <div class="container">
                <div class="director-inner">
                    <img src="{{asset('user/assets/img/ceo.jpeg')}}" alt="Director preview" class="director-preview">
                    <div class="director-article">
                        <div class="director-description">
                            <p>
                                Астана - Энергия - технологический лидер в энергетической сфере Казахстана.
                                Наше стремление к инновациям позволяет нам постоянно повышать эффективность
                                производства и снижать негативное воздействие на окружающую среду.
                            </p>
                            <div class="director-description-quotes">
                                <img src="{{asset('user/assets/img/icons/quotes.svg')}}" alt="quote" class="director-description-quote" />
                                <img src="{{asset('user/assets/img/icons/quotes.svg')}}" alt="quote" class="director-description-quote" />
                            </div>
                        </div>
                        <div class="director-info">
                            <p class="director-info-name text-primary">Кажкенов Казбек Алимсуринович</p>
                            <p class="director-info-position">Председатель Правления АО "Астана-Энергия"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <div class="news-inner">
                    <div class="news-day">
                        <div class="news-day-top">
                            <div class="news-day-info">
                                <h3 class="text-blue">Наши ежедневные показания</h3>
                                <p>По выработке электроэнергии и тепла.</p>
                            </div>
                            <h3 class="news-day-date text-blue">
                                03 СЕН 2023
                            </h3>
                        </div>
                        <div class="news-day-bottom">
                            <div class="news-day-list">
                                <div class="news-day-item bg-primary text-white">
                                    <div class="news-day-params">
                                        <div class="news-day-params-item">
                                            <div class="news-day-params-item-subtitle">Отпуск с шин</div>
                                            <div class="news-day-params-item-title">
                                                <div class="news-day-params-item-title-num" data-animate>
                                                    8424
                                                </div>
                                                <div class="news-day-params-item-title-unit">тыс.кВтч</div>
                                            </div>
                                        </div>
                                        <div class="news-day-params-item">
                                            <div class="news-day-params-item-subtitle">Законтрактованная</div>
                                            <div class="news-day-params-item-title">
                                                <div class="news-day-params-item-title-num" data-animate>
                                                    8424
                                                </div>
                                                <div class="news-day-params-item-title-unit">тыс.кВтч</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="news-day-item bd-primary">
                                    <div class="news-day-report">
                                        <div class="news-day-report-title">
                                            Отчеты по выроботке электроэнергии и тепла за весь период
                                        </div>
                                        <a href="#" class="btn btn-outline btn-icon-right btn-hover-fil">
                                            <span>Перейти</span>
                                            <svg class="btn-icon" width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.7071 8.70711C19.0976 8.31658 19.0976 7.68342 18.7071 7.29289L12.3431 0.928932C11.9526 0.538408 11.3195 0.538408 10.9289 0.928932C10.5384 1.31946 10.5384 1.95262 10.9289 2.34315L16.5858 8L10.9289 13.6569C10.5384 14.0474 10.5384 14.6805 10.9289 15.0711C11.3195 15.4616 11.9526 15.4616 12.3431 15.0711L18.7071 8.70711ZM0 9H18V7H0L0 9Z" fill="#F29646"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-last">
                        <h3 class="text-blue text-center">Последние новости</h3>
                        <div class="news-list">
                            <div class="news-list-left">
                                <div class="news-item bg-grey">
                                    <img src="{{asset('storage/' . $ln->image)}}" alt="News preview" class="news-item-preview">
                                    <div class="news-detail">
                                        <h4 class="news-detail-title">{{$ln->title_ru}}</h4>
                                        <div class="news-detail-date">24 августа 2023 </div>
                                        <a href="{{route('news.show',$ln->id)}}" class="detail-link">
                                            <span>Перейти</span>
                                            <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="news-list-right">
                                @foreach($on as $other_news)
                                <div class="news-item bg-grey">
                                    <div class="news-detail">
                                        <h4 class="news-detail-title">{{$other_news->title_ru}}</h4>
                                        <div class="news-detail-bottom">
                                            <div class="news-detail-date">23 августа 2023 </div>
                                            <a href="{{route('news.show',$other_news->id)}}" class="detail-link">
                                                <span>Перейти</span>
                                                <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <a href="{{route('news')}}" class="btn">Все новости</a>
                    </div>

                </div>
            </div>
        </section>
        <section class="history">
            <img src="{{asset('user/assets/img/history-bg.png')}}" alt="History background" class="history-bg">
            <div class="container">
                <div class="history-inner">
                    <h3 class="text-white">История создания</h3>
                    <div class="history-list text-white">
                        <div class="history-item">
                            <div class="history-item-title">1961</div>
                            <div class="history-item-description">
                                В конце декабря 1961 года была введена
                                Акмолинская ТЭЦ-1 с пуском в эксплуатацию
                                первой турбины и первого котла.
                            </div>
                        </div>
                        <div class="history-item">
                            <div class="history-item-title">1971</div>
                            <div class="history-item-description">
                                29 июня 1971 года было принято специальное
                                решение Министерства энергетики СССР по разработке
                                технического проекта Целиноградской ТЭЦ-2.
                            </div>
                        </div>
                        <div class="history-item">
                            <div class="history-item-title">2004</div>
                            <div class="history-item-description">
                                04 ноября 2004 года ГУ «Департамент юстиции г.Астаны»
                                регистрационным номером №17550-1901-АО была произведена г
                                осударственная регистрация АО «Астана-Энергия» в качестве
                                юридического лица.
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn">О компании</a>
                </div>
            </div>
        </section>
        <section class="vacance">
            <div class="container">
                <div class="vacance-inner">
                    <h3 class="text-blue">Вакансии</h3>
                    <div class="vacance-grid">
                        <div class="vacance-grid-preview">
                            <img src="{{asset('user/assets/img/vacance-bg.png')}}" alt="Vacance preview" class="vacance-grid-preview-img">
                        </div>
                        <div class="vacance-list">
                            <div class="vacance-item bg-grey">
                                <div class="vacance-item-title">Инженер по ремонту 10 разряда</div>
                                <div class="vacance-item-subtitle">Отдел ремонтов</div>
                            </div>
                            <div class="vacance-item bg-grey">
                                <div class="vacance-item-title">Инженер 9 разряда</div>
                                <div class="vacance-item-subtitle">Режимно-наладочная группа</div>
                            </div>
                            <div class="vacance-item bg-grey">
                                <div class="vacance-item-title">Инженер-металловед 10 разряда</div>
                                <div class="vacance-item-subtitle">Лаборатория металлов</div>
                            </div>
                        </div>
                    </div>
                    <div class="vacance-actions">
                        <a href="#" class="btn btn-outline btn-hover-fil">Отправить заявку</a>
                        <a href="#" class="btn">Все вакансии</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="partner">
            <div class="container">
                <div class="partner-inner">
                    <h3>Наши партнеры</h3>
                    <div class="partner-list">
                        <a href="#" class="partner-item">
                            <img src="{{asset('user/assets/img/partner-1.svg')}}" alt="Partner icon" class="partner-item-logo">
                        </a>
                        <a href="#" class="partner-item">
                            <img src="{{asset('user/assets/img/partner-2.svg')}}" alt="Partner icon" class="partner-item-logo">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection