<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>АСТАНА ЭНЕРГИЯ | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
</head>
<body>
<nav class="navbar">
    <a href="{{url('/')}}" class="navbar-head">
        <div class="navbar-head__logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="53" viewBox="0 0 62 53" fill="none">
                <path d="M14.5082 5.27569L0 13.8487H7.91354L1.31892 32.3136L32.3136 13.1892L29.6758 25.719L50.7785 13.1892L43.5245 34.292L38.9082 29.0163L18.4649 42.2055L23.0812 25.719L8.573 35.6109H14.5082L10.5514 52.7569L38.2488 34.9515L45.5028 46.8218L61.3299 0L37.5893 15.8271L40.2271 1.97838L11.2108 20.4433V16.4865L14.5082 5.27569Z" fill="#F29646"/>
            </svg>
        </div>
        <div class="navbar-head__text">
            АСТАНА ЭНЕРГИЯ
        </div>
    </a>
    <div class="navbar-body">
        <ul class="vertical-nav">
            <li @if(Route::is("home")) class="vertical-nav__active" @endif >
                <a href="{{route('home')}}">Главная</a>
            </li>
            <li @if(Route::is("home.*")) class="vertical-nav__active" @endif>
                <a href="#">О компании</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                    <path d="M16.42 9.50003L9.34335 2.59115C9.28509 2.53548 9.23902 2.46938 9.20783 2.39668C9.17663 2.32398 9.16093 2.24612 9.16161 2.16761C9.1623 2.08911 9.17937 2.01151 9.21183 1.93931C9.24429 1.86712 9.2915 1.80175 9.35073 1.747C9.40996 1.69225 9.48003 1.6492 9.55689 1.62035C9.63374 1.5915 9.71586 1.57741 9.79849 1.5789C9.88111 1.5804 9.96261 1.59744 10.0383 1.62906C10.1139 1.66067 10.1822 1.70622 10.2392 1.76307L17.7392 9.08599C17.8527 9.19683 17.9162 9.34538 17.9162 9.50003C17.9162 9.65468 17.8527 9.80323 17.7392 9.91407L10.2392 17.237C10.1822 17.2938 10.1139 17.3394 10.0383 17.371C9.96261 17.4026 9.88111 17.4197 9.79849 17.4212C9.71586 17.4226 9.63374 17.4086 9.55689 17.3797C9.48003 17.3509 9.40996 17.3078 9.35073 17.2531C9.2915 17.1983 9.24429 17.1329 9.21183 17.0607C9.17937 16.9885 9.1623 16.911 9.16161 16.8324C9.16093 16.7539 9.17663 16.6761 9.20783 16.6034C9.23902 16.5307 9.28509 16.4646 9.34335 16.4089L16.42 9.50003Z" fill="black"/>
                </svg>
                <div class="hover-menu">
                    <ul>
                        <li class="vertical-nav__active"><a href="#">О компании</a></li>
                        <a @if(Route::is("home.structure")) class="nav_active" @endif href="{{route('home.structure')}}"><li>Структура компании</li></a>
                        <a @if(Route::is("home.administration")) class="nav_active" @endif href="{{route('home.administration')}}"><li>Руководство</li></a>
                        <a  @if(Route::is("home.compliance")) class="nav_active" @endif href="{{route('home.compliance')}}"><li>Комплаенс</li></a>
                        <a @if(Route::is("home.vacancy")) class="nav_active" @endif href="{{route('home.vacancy')}}"><li>Вакансии</li></a>
                        <li><a href="#">Годовая финансовая отчетность</a></li>
                        <li><a href="#">Наша история</a></li>
                        <li><a href="#">План закупок</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">Документация</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                    <path d="M16.42 9.50003L9.34335 2.59115C9.28509 2.53548 9.23902 2.46938 9.20783 2.39668C9.17663 2.32398 9.16093 2.24612 9.16161 2.16761C9.1623 2.08911 9.17937 2.01151 9.21183 1.93931C9.24429 1.86712 9.2915 1.80175 9.35073 1.747C9.40996 1.69225 9.48003 1.6492 9.55689 1.62035C9.63374 1.5915 9.71586 1.57741 9.79849 1.5789C9.88111 1.5804 9.96261 1.59744 10.0383 1.62906C10.1139 1.66067 10.1822 1.70622 10.2392 1.76307L17.7392 9.08599C17.8527 9.19683 17.9162 9.34538 17.9162 9.50003C17.9162 9.65468 17.8527 9.80323 17.7392 9.91407L10.2392 17.237C10.1822 17.2938 10.1139 17.3394 10.0383 17.371C9.96261 17.4026 9.88111 17.4197 9.79849 17.4212C9.71586 17.4226 9.63374 17.4086 9.55689 17.3797C9.48003 17.3509 9.40996 17.3078 9.35073 17.2531C9.2915 17.1983 9.24429 17.1329 9.21183 17.0607C9.17937 16.9885 9.1623 16.911 9.16161 16.8324C9.16093 16.7539 9.17663 16.6761 9.20783 16.6034C9.23902 16.5307 9.28509 16.4646 9.34335 16.4089L16.42 9.50003Z" fill="black"/>
                </svg>
                <div class="hover-menu">
                    <ul>
                        <li class="vertical-nav__active">
                            <a href="#">Документация</a>
                        </li>
                        <li><a href="#">Государственные символы Республики Казахстан</a></li>
                        <li><a href="#">Законодательные и нормативные акты</a></li>
                    </ul>
                </div>
            </li>
            <li @if(Route::is("press.*") || Route::is("news.*")) class="vertical-nav__active" @endif>
                <a href="#">Пресс-центр</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                    <path d="M16.42 9.50003L9.34335 2.59115C9.28509 2.53548 9.23902 2.46938 9.20783 2.39668C9.17663 2.32398 9.16093 2.24612 9.16161 2.16761C9.1623 2.08911 9.17937 2.01151 9.21183 1.93931C9.24429 1.86712 9.2915 1.80175 9.35073 1.747C9.40996 1.69225 9.48003 1.6492 9.55689 1.62035C9.63374 1.5915 9.71586 1.57741 9.79849 1.5789C9.88111 1.5804 9.96261 1.59744 10.0383 1.62906C10.1139 1.66067 10.1822 1.70622 10.2392 1.76307L17.7392 9.08599C17.8527 9.19683 17.9162 9.34538 17.9162 9.50003C17.9162 9.65468 17.8527 9.80323 17.7392 9.91407L10.2392 17.237C10.1822 17.2938 10.1139 17.3394 10.0383 17.371C9.96261 17.4026 9.88111 17.4197 9.79849 17.4212C9.71586 17.4226 9.63374 17.4086 9.55689 17.3797C9.48003 17.3509 9.40996 17.3078 9.35073 17.2531C9.2915 17.1983 9.24429 17.1329 9.21183 17.0607C9.17937 16.9885 9.1623 16.911 9.16161 16.8324C9.16093 16.7539 9.17663 16.6761 9.20783 16.6034C9.23902 16.5307 9.28509 16.4646 9.34335 16.4089L16.42 9.50003Z" fill="black"/>
                </svg>
                <div class="hover-menu">
                    <ul>
                        <a @if(Route::is("press.index")) class="nav_active" @endif  href="{{route('press.index')}}"> <li class="vertical-nav__active">Пресс-центр</li></a>
                        <a @if(Route::is("news.*"))  class="nav_active"  @endif href="{{ route('news.index') }}"><li>Новости</li></a>
                        <a   href="#"><li>События</li></a>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="navbar-footer">
     <p class="navbar-footer__phone">+7 (7172) 64-40-59</p>
    </div>
</nav>

@yield('content')

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
                    +7 (7172) 64-40-59
            </div>
            <div class="footer_email">
                <p class="footer-title">Почта</p>
                     ae@astana-energy.kz
            </div>
            <div class="footer_address">
                <p class="footer-title">Адрес</p>
                    010000, Республика Казахстан г. Астана, район «Байқоңыр» Промзона ТЭЦ-2
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Add click event handlers to the footer titles
    $('.footer-title').click(function() {
        // Toggle the visibility of the next ul element (footer section)
        $(this).next('ul').slideToggle();
    });

</script>
</body>
</html>