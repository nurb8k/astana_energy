@extends('layouts.app')

@section('title','Главная страница' )
@section('content')
<div class="slideshow-container">
    <div class="mySlides fade">
        <img class="slide-img" style="width:100%; background: linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), url({{asset('images/astana_bg.jpg')}}), lightgray -194px -0.069px / 121.711% 104.514% no-repeat;">
        <div class="text">
            <p class="text__header drop-in_1">АСТАНА ЭНЕРГИЯ</p>
            <p class="text__subheader drop-in_2">Тепло и свет в каждый дом</p>
            <div class="text-slide drop-in_3">
                <div class="text-slide__header">
                    <p class="text-slide__header__title">
                        О компании
                    </p>
                </div>
                <div class="text-slide__subheader">
                    <p class="text-slide__subheader__text">На сегодняшняя станция имеет 8 паровых, 6 водогрейных котлов и 6 турбоагрегатов с установленной электрической мощностью 600 МВт.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section history">
    <div class="section__title">
        <p class="history__title-text">История создания Астана Энергия</p>
    </div>
    <div class="history__items">
        <div class="history__item reveal fade-bottom1">
            <div class="history__item__header">
                <p class="history__item__header__title">
                    1997
                </p>
            </div>
            <div class="history__item__subheader">
                <p class="history__item__subheader__text">
                    На сегодняшний день станция имеет 8 паровых, 6 водогрейных котлов и 6 турбоагрегатов с установленной электрической мощностью 600 МВт.
                </p>
            </div>
        </div>
        <div class="history__item reveal fade-bottom2">
            <div class="history__item__header">
                <p class="history__item__header__title">
                    1997
                </p>
            </div>
            <div class="history__item__subheader">
                <p class="history__item__subheader__text">
                    На сегодняшний день станция имеет 8 паровых, 6 водогрейных котлов и 6 турбоагрегатов с установленной электрической мощностью 600 МВт.
                </p>
            </div>
        </div>
        <div class="history__item reveal fade-bottom3">
            <div class="history__item__header">
                <p class="history__item__header__title">
                    2021
                </p>
            </div>
            <div class="history__item__subheader">
                <p class="history__item__subheader__text">
                    На сегодняшний день станция имеет 8 паровых, 6 водогрейных котлов и 6 турбоагрегатов с установленной электрической мощностью 600 МВт.
                </p>
            </div>
        </div>
    </div>
    <div class="history__footer">
        <a href="#" class="btn btn-history">
            О компании
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                <path d="M5.88569 6.99981L0.147385 1.39756C0.10014 1.35241 0.0627896 1.29881 0.0374942 1.23986C0.0121987 1.18091 -0.000539191 1.11778 1.7489e-05 1.05412C0.000574169 0.99046 0.014414 0.927539 0.0407369 0.868995C0.0670598 0.810452 0.105343 0.757449 0.153371 0.713054C0.201398 0.668658 0.258216 0.633752 0.320538 0.610355C0.382859 0.586959 0.449446 0.575536 0.516446 0.576747C0.583445 0.577959 0.649525 0.591782 0.710864 0.617415C0.772203 0.643049 0.827581 0.679984 0.873795 0.726084L6.95538 6.66407C7.04743 6.75395 7.09893 6.87441 7.09893 6.99981C7.09893 7.12521 7.04743 7.24566 6.95538 7.33555L0.873795 13.2735C0.827581 13.3196 0.772203 13.3566 0.710864 13.3822C0.649525 13.4078 0.583445 13.4217 0.516446 13.4229C0.449446 13.4241 0.382859 13.4127 0.320538 13.3893C0.258216 13.3659 0.201398 13.331 0.153371 13.2866C0.105343 13.2422 0.0670598 13.1892 0.0407369 13.1306C0.014414 13.0721 0.000574169 13.0092 1.7489e-05 12.9455C-0.000539191 12.8818 0.0121987 12.8187 0.0374942 12.7598C0.0627896 12.7008 0.10014 12.6472 0.147385 12.6021L5.88569 6.99981Z" fill="#F29646"/>
            </svg>
        </a>
    </div>
</div>

<div class="section news">
    <div class="section__title">
        <p class="history__title-text reveal fade-right">Астана энергия Новости</p>
    </div>
    <div class="news__content">
        <div class="news__lg-img">
            <img src="{{asset('images/logos/news_photo.png')}}" alt="">
            <div class="news__img-text">
                <div class="news__img-text__header">
                    <p class="news__img-text__header__title">
                        24 августа 2023
                    </p>
                </div>
                <div class="news__img-text__subheader">
                    <p class="news__img-text__subheader__text">
                        Аким столицы посетил ТЭЦ-1 и ТЭЦ-2
                    </p>
                </div>

            </div>
        </div>
        <div class="news__items ">
            <div class="news__item reveal fade-right1">
                <div class="news__data">
                    24 августа 2023
                </div>
                <div class="news__text">
                    Подготовка к осенне-зимнему периоду 2023-2024 по АО Астана Энергия»
                </div>
            </div>
            <div class="news__item reveal fade-right2">
                <div class="news__data">
                    24 августа 2023
                </div>
                <div class="news__text">
                    Подготовка к осенне-зимнему периоду 2023-2024 по АО Астана Энергия»
                </div>
            </div>
            <div class="news__item reveal fade-right3">
                <div class="news__data">
                    24 августа 2023
                </div>
                <div class="news__text">
                    ТОО «А.Э.Ц-Стандарт» привлечен к административной ответственности за повреждение электрических сетей
                </div>
            </div>
            <div class="news__item reveal fade-right4">
                <div class="news__data">
                    24 августа 2023
                </div>
                <div class="news__text">
                    ТОО «NAK Development» привлечен к административной ответственности за проведения несогласованных земляных работ в охранных зонах линий электрических
                </div>
            </div>
            <div class="news__footer">
                <a href="{{route('news.index')}}" class="btn btn-history">
                    Все новости
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                        <path d="M5.88569 6.99981L0.147385 1.39756C0.10014 1.35241 0.0627896 1.29881 0.0374942 1.23986C0.0121987 1.18091 -0.000539191 1.11778 1.7489e-05 1.05412C0.000574169 0.99046 0.014414 0.927539 0.0407369 0.868995C0.0670598 0.810452 0.105343 0.757449 0.153371 0.713054C0.201398 0.668658 0.258216 0.633752 0.320538 0.610355C0.382859 0.586959 0.449446 0.575536 0.516446 0.576747C0.583445 0.577959 0.649525 0.591782 0.710864 0.617415C0.772203 0.643049 0.827581 0.679984 0.873795 0.726084L6.95538 6.66407C7.04743 6.75395 7.09893 6.87441 7.09893 6.99981C7.09893 7.12521 7.04743 7.24566 6.95538 7.33555L0.873795 13.2735C0.827581 13.3196 0.772203 13.3566 0.710864 13.3822C0.649525 13.4078 0.583445 13.4217 0.516446 13.4229C0.449446 13.4241 0.382859 13.4127 0.320538 13.3893C0.258216 13.3659 0.201398 13.331 0.153371 13.2866C0.105343 13.2422 0.0670598 13.1892 0.0407369 13.1306C0.014414 13.0721 0.000574169 13.0092 1.7489e-05 12.9455C-0.000539191 12.8818 0.0121987 12.8187 0.0374942 12.7598C0.0627896 12.7008 0.10014 12.6472 0.147385 12.6021L5.88569 6.99981Z" fill="#F29646"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="section hyper-links">
    <div class="hyper-link">
        <div class="hyper-link__bg-img">
            <img class="hyper-link__img" src="{{asset('images/logos/strategy.png')}}" alt="">
        </div>
        <div class="hyper-link__header">
            <div class="hyper-link__logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                    <path d="M31.378 21.7708C31.8748 22.0961 32.5439 21.9193 32.8152 21.3912L40.6873 6.06978C41.3138 4.85048 42.8572 4.4405 44.0062 5.1882C44.9999 5.83489 45.3438 7.12828 44.8023 8.18307L36.501 24.355C35.1489 26.9892 31.8165 27.8779 29.3323 26.2668L20.2384 20.3693C19.7416 20.0471 19.0752 20.2247 18.8047 20.7514L8.56538 40.6893H43.2869C44.6875 40.6893 45.8229 41.8247 45.8229 43.2253C45.8229 44.6259 44.6875 45.7613 43.2869 45.7613H5.77149C3.01007 45.7613 0.771484 43.5227 0.771484 40.7613V2.36586C0.771484 1.1218 1.78 0.113281 3.02406 0.113281C4.26812 0.113281 5.27663 1.12179 5.27663 2.36585V36.9867L15.1304 17.7444C16.4848 15.0994 19.8334 14.2125 22.3196 15.8402L31.378 21.7708Z" fill="white"/>
                </svg>
            </div>
            <div class="hyper-link__text">
                Стратегия Развития
            </div>
        </div>
        <div class="hyper-link__footer">
            <img src="{{asset('images/logos/>.svg')}}" alt="">
        </div>
    </div>
    <div class="hyper-link">
        <div class="hyper-link__bg-img">
            <img class="hyper-link__img" src="{{asset('images/logos/analytics.png')}}" alt="">
        </div>
        <div class="hyper-link__header">
            <div class="hyper-link__logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="53" height="45" viewBox="0 0 53 45" fill="none">
                    <path d="M40.9433 42.7058L48.094 55.2488H43.3296L36.1789 42.7058H25.9648L18.8142 55.2488H14.0498L21.2005 42.7058H8.35236C7.80487 42.7058 7.27982 42.4856 6.89269 42.0935C6.50556 41.7015 6.28807 41.1697 6.28807 40.6153V5.07676H2.1595C1.61202 5.07676 1.08696 4.85651 0.69983 4.46446C0.312701 4.07242 0.0952148 3.54069 0.0952148 2.98626C0.0952148 2.43182 0.312701 1.90009 0.69983 1.50805C1.08696 1.116 1.61202 0.895752 2.1595 0.895752H59.9595C60.507 0.895752 61.032 1.116 61.4192 1.50805C61.8063 1.90009 62.0238 2.43182 62.0238 2.98626C62.0238 3.54069 61.8063 4.07242 61.4192 4.46446C61.032 4.85651 60.507 5.07676 59.9595 5.07676H55.8309V40.6153C55.8309 41.1697 55.6134 41.7015 55.2263 42.0935C54.8392 42.4856 54.3141 42.7058 53.7666 42.7058H40.9433ZM51.7024 5.07676H10.4166V38.5248H51.7024V5.07676ZM20.7381 21.8008C21.2856 21.8008 21.8106 22.021 22.1977 22.4131C22.5849 22.8051 22.8024 23.3369 22.8024 23.8913V28.0723C22.8024 28.6267 22.5849 29.1585 22.1977 29.5505C21.8106 29.9425 21.2856 30.1628 20.7381 30.1628C20.1906 30.1628 19.6655 29.9425 19.2784 29.5505C18.8913 29.1585 18.6738 28.6267 18.6738 28.0723V23.8913C18.6738 23.3369 18.8913 22.8051 19.2784 22.4131C19.6655 22.021 20.1906 21.8008 20.7381 21.8008ZM31.0595 17.6198C31.607 17.6198 32.132 17.84 32.5192 18.2321C32.9063 18.6241 33.1238 19.1558 33.1238 19.7103V28.0723C33.1238 28.6267 32.9063 29.1585 32.5192 29.5505C32.132 29.9425 31.607 30.1628 31.0595 30.1628C30.512 30.1628 29.987 29.9425 29.5998 29.5505C29.2127 29.1585 28.9952 28.6267 28.9952 28.0723V19.7103C28.9952 19.1558 29.2127 18.6241 29.5998 18.2321C29.987 17.84 30.512 17.6198 31.0595 17.6198ZM41.3809 13.4388C41.9284 13.4388 42.4535 13.659 42.8406 14.0511C43.2277 14.4431 43.4452 14.9748 43.4452 15.5293V28.0723C43.4452 28.6267 43.2277 29.1585 42.8406 29.5505C42.4535 29.9425 41.9284 30.1628 41.3809 30.1628C40.8334 30.1628 40.3084 29.9425 39.9213 29.5505C39.5341 29.1585 39.3166 28.6267 39.3166 28.0723V15.5293C39.3166 14.9748 39.5341 14.4431 39.9213 14.0511C40.3084 13.659 40.8334 13.4388 41.3809 13.4388Z" fill="white"/>
                </svg>
            </div>
            <div class="hyper-link__text">
                Аналитика
            </div>
        </div>
        <div class="hyper-link__footer">
            <img src="{{'images/logos/>.svg'}}" alt="">
        </div>
    </div>
    <div class="hyper-link">
        <div class="hyper-link__bg-img">
            <img class="hyper-link__img" src="{{'images/logos/vacancy.png'}}" alt="">
        </div>
        <div class="hyper-link__header">
            <div class="hyper-link__logo">
                <img src="{{'images/logos/vac.svg'}}" alt="">
            </div>
            <div class="hyper-link__text">
                Вакансии
            </div>
        </div>
        <div class="hyper-link__footer">
            <img src="{{'images/logos/>.svg'}}" alt="">
        </div>
    </div>
</div>

<div class="section info">
    <div class="section__title">
        <p class="history__title-text">Раскрытие Информации</p>
    </div>
    <div class="news__content">
        <div class="news__lg-img">
            <img src="{{asset('images/logos/info.png')}}" alt="">
        </div>
        <div class="news__items">
            @foreach(\App\Models\News::take(4)->get() as $news)
                <div class="news__item">
                    <div class="news__data">
                       {{$news->created_at->format('d-m-20y')}}
                    </div>
                    <a href="{{route('news.show',$news->id)}}" class="news__text">
                        {{$news->title_ru}}
                    </a>
                </div>
            @endforeach
            <div class="news__footer">
                <a href="#" class="btn btn-history">
                    Подробнее
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                        <path d="M5.88569 6.99981L0.147385 1.39756C0.10014 1.35241 0.0627896 1.29881 0.0374942 1.23986C0.0121987 1.18091 -0.000539191 1.11778 1.7489e-05 1.05412C0.000574169 0.99046 0.014414 0.927539 0.0407369 0.868995C0.0670598 0.810452 0.105343 0.757449 0.153371 0.713054C0.201398 0.668658 0.258216 0.633752 0.320538 0.610355C0.382859 0.586959 0.449446 0.575536 0.516446 0.576747C0.583445 0.577959 0.649525 0.591782 0.710864 0.617415C0.772203 0.643049 0.827581 0.679984 0.873795 0.726084L6.95538 6.66407C7.04743 6.75395 7.09893 6.87441 7.09893 6.99981C7.09893 7.12521 7.04743 7.24566 6.95538 7.33555L0.873795 13.2735C0.827581 13.3196 0.772203 13.3566 0.710864 13.3822C0.649525 13.4078 0.583445 13.4217 0.516446 13.4229C0.449446 13.4241 0.382859 13.4127 0.320538 13.3893C0.258216 13.3659 0.201398 13.331 0.153371 13.2866C0.105343 13.2422 0.0670598 13.1892 0.0407369 13.1306C0.014414 13.0721 0.000574169 13.0092 1.7489e-05 12.9455C-0.000539191 12.8818 0.0121987 12.8187 0.0374942 12.7598C0.0627896 12.7008 0.10014 12.6472 0.147385 12.6021L5.88569 6.99981Z" fill="#F29646"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="section stats">
    <div class="section__title">
        <p class="history__title-text">Обеспечение теплом и электричеством</p>
        <div class="section__subtitle">
            <p class="section__subtitle-text">Каждый день мы обновляем данные о выработке электроэнергии и тепла</p>
        </div>
    </div>

    <div class="stats-contents">
        <div class="stats-contents__daily">
            <div class="daily__title">
                <p class="daily__title-text">
                    Ежедневные показания Астана Энергия
                </p>
            </div>
            <div class="daily__date">
                01.09.2023
            </div>
            <div class="daily-stats">
                <div class="daily-stat">
                    <div class="daily-stats__title">
                        Отпуск с шин (тыс.кВтч)
                    </div>
                    <div class="daily-stats__number">
                        8424
                    </div>
                </div>
                <div class="daily-stat">
                    <div class="daily-stats__title">
                        Отпуск с шин (тыс.кВтч)
                    </div>
                    <div class="daily-stats__number">
                        8424
                    </div>
                </div>
            </div>
        </div>
        <div class="stats-content__infographic">
            <div class="infographic__title">
                <p class="infographic__title-text">Инфографика</p>
            </div>
            <div class="infographic__subtitle">
                Информация по отпуску электрической энергии
            </div>
            <div class="infographic__footer">
                <a href="#" class="btn infographic-btn">
                    Подробнее
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                        <path d="M5.88569 7.0003L0.147385 1.39805C0.10014 1.3529 0.0627896 1.2993 0.0374942 1.24035C0.0121987 1.1814 -0.000539191 1.11827 1.7489e-05 1.05461C0.000574169 0.990949 0.014414 0.928027 0.0407369 0.869484C0.0670598 0.81094 0.105343 0.757937 0.153371 0.713542C0.201398 0.669147 0.258216 0.634241 0.320538 0.610844C0.382859 0.587447 0.449446 0.576024 0.516446 0.577236C0.583445 0.578447 0.649525 0.59227 0.710864 0.617904C0.772203 0.643537 0.827581 0.680472 0.873795 0.726572L6.95538 6.66456C7.04743 6.75444 7.09893 6.87489 7.09893 7.0003C7.09893 7.1257 7.04743 7.24615 6.95538 7.33603L0.873795 13.274C0.827581 13.3201 0.772203 13.3571 0.710864 13.3827C0.649525 13.4083 0.583445 13.4221 0.516446 13.4234C0.449446 13.4246 0.382859 13.4131 0.320538 13.3897C0.258216 13.3664 0.201398 13.3314 0.153371 13.2871C0.105343 13.2427 0.0670598 13.1897 0.0407369 13.1311C0.014414 13.0726 0.000574169 13.0096 1.7489e-05 12.946C-0.000539191 12.8823 0.0121987 12.8192 0.0374942 12.7602C0.0627896 12.7013 0.10014 12.6477 0.147385 12.6025L5.88569 7.0003Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="section our_partners">
    <div class="section__title">
        <p class="history__title-text">Наши партнеры</p>
    </div>
    <div class="partners">
        <div class="partner">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                <path d="M6.3871 2.4543L0 6.1918H3.48387L0.580645 14.2418L14.2258 5.9043L13.0645 11.3668L22.3548 5.9043L19.1613 15.1043L17.129 12.8043L8.12903 18.5543L10.1613 11.3668L3.77419 15.6793H6.3871L4.64516 23.1543L16.8387 15.3918L20.0323 20.5668L27 0.154297L16.5484 7.0543L17.7097 1.0168L4.93548 9.0668V7.3418L6.3871 2.4543Z" fill="#939393"/>
            </svg>
            <p class="partner-text">
                АСТАНА- РЭК
            </p>
        </div>
        <div class="partner">
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="29" viewBox="0 0 33 29" fill="none">
                <path d="M7.80645 2.9543L0 7.5043H4.25806L0.709677 17.3043L17.3871 7.1543L15.9677 13.8043L27.3226 7.1543L23.4194 18.3543L20.9355 15.5543L9.93548 22.5543L12.4194 13.8043L4.6129 19.0543H7.80645L5.67742 28.1543L20.5806 18.7043L24.4839 25.0043L33 0.154297L20.2258 8.5543L21.6452 1.2043L6.03226 11.0043V8.9043L7.80645 2.9543Z" fill="#939393"/>
            </svg>
            <p class="partner-text">
                АСТАНА ТЕПЛОТРАНЗИТ
            </p>
        </div>
    </div>
</div>


<script>
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);

</script>


@endsection