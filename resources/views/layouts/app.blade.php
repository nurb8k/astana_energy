<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>АСТАНА ЭНЕРГИЯ | @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Астана Энергия</title>
    <link rel="stylesheet" href="{{asset('user/assets/css/global.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/home-page.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/contact-page.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/about-page.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/infographic-page.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/documentation-page.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/reports-page.css')}}">
    <link rel="icon" href="{{asset('favicon-32x32.png')}}">
</head>
<body>
<header class="haeder">
    <div class="container">
        <div class="header-inner">
            <div class="header-top">

                <a href="{{route('home')}}">
                    <img src="{{asset('user/assets/img/logo.svg')}}" alt="Astana Energy" class="header-logo">
                </a>
                <nav class="header-nav">
                    <ul class="header-nav-list">
                        <li class="header-nav-item">
                            <a href="{{route('about')}}" class="header-nav-link {{ \Request::route()->getName() == 'about' ? 'active' : ''}}">О компании</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="{{route('reports')}}" class="header-nav-link {{ \Request::route()->getName() == 'reports' ? 'active' : ''}}">Отчетность</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="{{route('documentation.index')}} " class="header-nav-link {{ \Request::route()->getName() == 'documentation.index' ? 'active' : ''}}">Документация</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="{{route('infographic')}}" class="header-nav-link {{ \Request::route()->getName() == 'infographic' ? 'active' : ''}}">Инфографика</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="{{route('news.index')}}" class="header-nav-link {{ \Request::routeIs('news.*') ? 'active' : '' }}">Новости</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="{{route('contact')}}" class="header-nav-link {{ \Request::route()->getName() == 'contact' ? 'active' : ''}}">Контакты</a>
                        </li>
                    </ul>
                </nav>
                <div class="header-action">
                    <div class="header-search">
                        <input type="text" class="header-search-input" placeholder="Поиск">
                        <img src="{{asset('user/assets/img/icons/search.svg')}}" alt="Search Icon" class="header-search-icon">
                    </div>
                    <div class="lang-select">
                        <select>
                            <option value="">Русский</option>
                            <option value="">Казахский</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <a href="tel:+77172644059" class="header-phone">
                    <img src="{{asset('user/assets/img/icons/phone.svg')}}" alt="Phone Icon" class="header-phone-icon">
                    <span>+7 (7172) 64-40-59</span>
                </a>
                <div class="header-eye">
                    <img src="{{asset('user/assets/img/icons/eye.svg')}}" alt="Eye Icon" class="header-eye-icon">
                    <span>Версия для слабовидящих</span>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')

<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-top">
                <div class="footer-list">
                    <div class="footer-item">
                        <p class="footer-item-title">Контакты</p>
                        <img src="{{asset('user/assets/img/logo-footer.svg')}}" alt="Footer logo" class="footer-logo">
                        <p class="footer-address">
                            <img src="{{asset('user/assets/img/icons/address.svg')}}" alt="Address icon"> 010000, Республика Казахстан г. Астана, «Байқоңыр» Промзона ТЭЦ-2
                        </p>
                        <a href="mailto:ae@astana-energy.kz" class="footer-mail">
                            <img src="{{asset('user/assets/img/icons/mail.svg')}}" alt="Mail icon">
                            ae@astana-energy.kz
                        </a>
                        <a href="tel:+77172644059" class="footer-phone">
                            <img src="{{asset('user/assets/img/icons/phone-footer.svg')}}" alt="Mail icon">
                            +7 (7172) 64-40-59
                        </a>
                    </div>
                    <div class="footer-item">
                        <div class="footer-item-title">Навигация</div>
                        <a href="{{route('home')}}" class="footer-item-link">Главная</a>
                        <a href="{{route('about')}}" class="footer-item-link">О Компании</a>
                        <a href="{{route('reports')}}" class="footer-item-link">Отчеты</a>
                        <a href="{{route('documentation.index')}}" class="footer-item-link">Документация</a>
                        <a href="{{route('infographic')}}" class="footer-item-link">Инфографика</a>
                        <a href="{{route('news.index')}}" class="footer-item-link">Новости</a>
                        <a href="{{route('contact')}}" class="footer-item-link">Контакты</a>
                    </div>
                    <div class="footer-item">
                        <div class="footer-item-title">Полезные ссылки</div>
                        <a href="#" class="footer-item-link">Сайт Президента Республики Казахстан</a>
                        <a href="#" class="footer-item-link">АО «СОЦИАЛЬНО-ПРЕДПРИНИМАТЕЛЬСКАЯ КОРПОРАЦИЯ «ASTANA»</a>
                        <a href="#" class="footer-item-link">Акимат города Астана</a>
                        <a href="#" class="footer-item-link">Верховный Суд Республики Казахстан</a>
                        <a href="#" class="footer-item-link">Казахский агротехнический университет имени С.Сейфуллина</a>
                        <a href="#" class="footer-item-link">Astana IT University</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-company">
                    <p class="text-white text-center">АО «Астана-Энергия» | 2022</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('user/assets/js/script.js')}}"></script>
<script src="{{asset('user/assets/js/swiper-bundle.min.js')}}"></script>
</body>
</html>