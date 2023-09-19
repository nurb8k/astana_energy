@extends('layouts.app')

@section('title','Home page' )
@section('content')
<div class="slideshow-container">
    <div class="mySlides fade">
        <img class="slide-img" src="{{asset('images/logos/background.png')}}" style="width:100%;">
        <div class="text">
            <p class="text__header reveal fade-left">АСТАНА ЭНЕРГИЯ</p>
            <p class="text__subheader reveal fade-left">Тепло и свет в каждый дом</p>
            <div class="text-slide reveal fade-left">
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

<div class="section history ">
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
                <a href="#" class="btn btn-history">
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
                <svg xmlns="http://www.w3.org/2000/svg" width="61" height="53" viewBox="0 0 61 53" fill="none">
                    <path d="M40.2379 40.7056L47.1468 52.8308H42.5435L35.6347 40.7056H25.7661L18.8573 52.8308H14.2541L21.1629 40.7056H8.74934C8.22038 40.7056 7.71308 40.4927 7.33904 40.1137C6.96501 39.7347 6.75488 39.2207 6.75488 38.6847V4.32984H2.76595C2.23698 4.32984 1.72968 4.11692 1.35565 3.73793C0.981615 3.35895 0.771484 2.84493 0.771484 2.30896C0.771484 1.77299 0.981615 1.25897 1.35565 0.879987C1.72968 0.500999 2.23698 0.288086 2.76595 0.288086H58.6109C59.1399 0.288086 59.6472 0.500999 60.0212 0.879987C60.3953 1.25897 60.6054 1.77299 60.6054 2.30896C60.6054 2.84493 60.3953 3.35895 60.0212 3.73793C59.6472 4.11692 59.1399 4.32984 58.6109 4.32984H54.622V38.6847C54.622 39.2207 54.4119 39.7347 54.0379 40.1137C53.6638 40.4927 53.1565 40.7056 52.6276 40.7056H40.2379ZM50.6331 4.32984H10.7438V36.6638H50.6331V4.32984ZM20.7161 20.4968C21.2451 20.4968 21.7524 20.7097 22.1264 21.0887C22.5005 21.4677 22.7106 21.9817 22.7106 22.5177V26.5595C22.7106 27.0954 22.5005 27.6094 22.1264 27.9884C21.7524 28.3674 21.2451 28.5803 20.7161 28.5803C20.1872 28.5803 19.6799 28.3674 19.3058 27.9884C18.9318 27.6094 18.7217 27.0954 18.7217 26.5595V22.5177C18.7217 21.9817 18.9318 21.4677 19.3058 21.0887C19.6799 20.7097 20.1872 20.4968 20.7161 20.4968ZM30.6884 16.4551C31.2174 16.4551 31.7247 16.668 32.0987 17.047C32.4728 17.426 32.6829 17.94 32.6829 18.476V26.5595C32.6829 27.0954 32.4728 27.6094 32.0987 27.9884C31.7247 28.3674 31.2174 28.5803 30.6884 28.5803C30.1595 28.5803 29.6522 28.3674 29.2782 27.9884C28.9041 27.6094 28.694 27.0954 28.694 26.5595V18.476C28.694 17.94 28.9041 17.426 29.2782 17.047C29.6522 16.668 30.1595 16.4551 30.6884 16.4551ZM40.6608 12.4133C41.1897 12.4133 41.697 12.6262 42.0711 13.0052C42.4451 13.3842 42.6552 13.8982 42.6552 14.4342V26.5595C42.6552 27.0954 42.4451 27.6094 42.0711 27.9884C41.697 28.3674 41.1897 28.5803 40.6608 28.5803C40.1318 28.5803 39.6245 28.3674 39.2505 27.9884C38.8764 27.6094 38.6663 27.0954 38.6663 26.5595V14.4342C38.6663 13.8982 38.8764 13.3842 39.2505 13.0052C39.6245 12.6262 40.1318 12.4133 40.6608 12.4133Z" fill="white"/>
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
            <div class="news__item">
                <div class="news__data">
                    24 августа 2023
                </div>
                <div class="news__text">
                    Подготовка к осенне-зимнему периоду 2023-2024 по АО Астана Энергия»
                </div>
            </div>
            <div class="news__item">
                <div class="news__data">
                    24 августа 2023
                </div>
                <div class="news__text">
                    ТОО «А.Э.Ц-Стандарт» привлечен к административной ответственности за повреждение электрических сетей
                </div>
            </div>
            <div class="news__item">
                <div class="news__data">
                    24 августа 2023
                </div>
                <div class="news__text">
                    ТОО «NAK Development» привлечен к административной ответственности за проведения несогласованных земляных работ в охранных зонах линий электрических
                </div>
            </div>
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

<footer class="footer">
    <div class="footer_items">
        <div class="footer_item">
            <div class="footer_company">
                <p class="footer-title">О компании</p>
                <ul class="collapse-group">
                    <li>Структура компании</li>
                    <li>Комплаенс</li>
                    <li>Вакансии</li>
                    <li>Годовая финансовая отчетность</li>
                    <li>Наша история</li>
                    <li>План закупок</li>
                    <li>Стратегия</li>
                </ul>
            </div>
            <div class="footer_document">
                <p class="footer-title">Документация</p>
                <ul class="collapse-group">
                    <li>Государственные символы Республики Казахстан</li>
                    <li>Законодательные и нормативные акты</li>
                </ul>
            </div>
        </div>
        <div class="footer_item">
            <div class="footer_reports">
                <p class="footer-title">Отчеты</p>
                <ul class="collapse-group">
                    <li>Отчеты по исполнению тарифной сметы</li>
                    <li>Отчеты перед потребителями и иными заинтересованными лицами</li>
                    <li>Отчеты по исполнению инвестиционной програмы</li>
                    <li>Аналитика</li>
                </ul>
            </div>
            <div class="footer_infographics"></div>
            <div class="footer_press">
                <p class="footer-title">Пресс-центр</p>
                <ul class="collapse-group">
                    <li>Новости</li>
                    <li>События</li>

                </ul>
            </div>
        </div>
        <div class="footer_item">
            <div class="footer_phone">
                <p class="footer-title">Телефон</p>
                <ul class="collapse-group">
                    <li>+7 (7172) 64-40-59</li>
                </ul>
            </div>
            <div class="footer_email">
                <p class="footer-title">Почта</p>
                <ul class="collapse-group">
                    <li>ae@astana-energy.kz</li>
                </ul>
            </div>
            <div class="footer_address">
                <p class="footer-title">Адрес</p>
                <ul class="collapse-group">
                    <li>010000, Республика Казахстан г. Астана, район «Байқоңыр» Промзона ТЭЦ-2</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Add click event handlers to the footer titles
    $('.footer-title').click(function() {
        // Toggle the visibility of the next ul element (footer section)
        $(this).next('ul').slideToggle();
    });

    $('.navbar-item__title').click(function() {
        // Toggle the visibility of the next ul element (footer section)
        $(this).next('ul').slideToggle();
    });
</script>

@endsection