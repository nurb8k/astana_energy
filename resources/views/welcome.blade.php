@extends('layouts.app')

@section('title','Главная страница' )
@section('content')
    <main>
        <section class="first-slide">
            <div class="container">
                <div class="first-slide-inner text-white">
                    <div class="first-slide-left">
                        <h1>AO «Астана- Энергия»</h1>
                        <p>{{__('messages.lozung')}}</p>
                        <a href="{{route('structure')}}" class="btn">{{__('messages.struc')}}</a>
                    </div>
                    <div class="first-slide-right">
                        <p>
                            <b>Астана - Энергия</b>{{__('messages.main_text')}}
                        </p>
                    </div>
                    <img src="{{asset('user/assets/img/bg.jpeg')}}" alt="First slide background image" class="first-slide-bg">
                </div>
            </div>
        </section>
        <section class="director bg-grey">
            <div class="container">
                <div class="director-inner">
                    <img src="{{asset('user/assets/img/ceo.jpeg')}}" alt="Director preview" class="director-preview">
                    <div class="director-article">
                        <div class="director-description">
                            <p>{{__('messages.dir_text')}}</p>
                            <div class="director-description-quotes">
                                <img src="{{asset('user/assets/img/icons/quotes.svg')}}" alt="quote" class="director-description-quote" />
                                <img src="{{asset('user/assets/img/icons/quotes.svg')}}" alt="quote" class="director-description-quote" />
                            </div>
                        </div>
                        <div class="director-info">
                            <p class="director-info-name text-primary">Кажкенов Казбек Алимсуринович</p>
                            <p class="director-info-position">{{__('messages.pos')}}</p>
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
                                <h3 class="text-blue">{{__('messages.daily_rec')}}</h3>
                                <p>{{__('messages.daily_text')}}</p>
                            </div>
                            <h3 class="news-day-date text-blue">
                                {{__('messages.daily_data')}}
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
{{__('messages.rep_text')}}
                                        </div>
                                        <a href="{{route('infographic')}}" class="btn btn-outline btn-icon-right btn-hover-fil">
                                            <span>{{__('messages.open')}}</span>
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
                        <h3 class="text-blue text-center">{{__('messages.last_news')}}</h3>
                        <div class="news-list">
                            <div class="news-list-left">
                                <div class="news-item bg-grey">
                                    <img src="{{asset('storage/' . $ln->image)}}" alt="News preview" class="news-item-preview">
                                    <div class="news-detail">
                                        <h4 class="news-detail-title">{{$ln->title_ru}}</h4>
                                        <div class="news-detail-date">24 августа 2023 </div>
                                        <a href="{{route('news.show',$ln->id)}}" class="detail-link">
                                            <span>{{__('messages.open')}}</span>
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
                                                <span>{{__('messages.open')}}</span>
                                                <img src="{{asset('user/assets/img/icons/right-arrow.svg')}}" alt="News link icon" class="detail-link-icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <a href="{{route('news.index')}}" class="btn">{{__('messages.all_news')}}</a>
                    </div>

                </div>
            </div>
        </section>
        <section class="history">
            <img src="{{asset('user/assets/img/history-bg.png')}}" alt="History background" class="history-bg">
            <div class="container">
                <div class="history-inner">
                    <h3 class="text-white">{{__('messages.history')}}</h3>
                    <div class="history-list text-white">
                        <div class="history-item">
                            <div class="history-item-title">1961</div>
                            <div class="history-item-description">
                                {{__('messages.his-1')}}
                            </div>
                        </div>
                        <div class="history-item">
                            <div class="history-item-title">1971</div>
                            <div class="history-item-description">
                                {{__('messages.his-2')}}
                            </div>
                        </div>
                        <div class="history-item">
                            <div class="history-item-title">2004</div>
                            <div class="history-item-description">
                                {{__('messages.his-3')}}
                            </div>
                        </div>
                    </div>
                    <a href="{{route('about')}}" class="btn">{{__('messages.about')}}</a>
                </div>
            </div>
        </section>
        <section class="vacance">
            <div class="container">
                <div class="vacance-inner">
                    <h3 class="text-blue">{{__('messages.vacs')}}</h3>
                    <div class="vacance-grid">
                        <div class="vacance-grid-preview">
                            <img src="{{asset('user/assets/img/vac.png')}}" alt="Vacance preview" class="vacance-grid-preview-img">
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
                        <a href="{{route('contact')}}" class="btn btn-outline btn-hover-fil">{{__('messages.send_apply')}}</a>
                        <a href="{{route('vacancies')}}" class="btn">{{__('messages.all_vacs')}}</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="partner">
            <div class="container">
                <div class="partner-inner">
                    <h3 class="text-blue">{{__('messages.our_par')}}</h3>
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