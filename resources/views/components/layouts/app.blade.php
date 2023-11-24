<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>АСТАНА ЭНЕРГИЯ @yield('title')</title>
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
<style>
    body {
        transition: all 0.3s;
    }

    .grayscale {
        filter: grayscale(100%);
    }
</style>
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
                            <a href="{{route('about')}}" class="header-nav-link {{ \Request::route()->getName() == 'about' ? 'active' : ''}}">{{__('messages.about')}}</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="{{route('reports')}}" class="header-nav-link {{ \Request::route()->getName() == 'reports' ? 'active' : ''}}">{{__('messages.reports')}}</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="{{route('documentation.index')}} " class="header-nav-link {{ \Request::route()->getName() == 'documentation.index' ? 'active' : ''}}">{{__('messages.docs')}}</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="{{route('infographic')}}" class="header-nav-link {{ \Request::route()->getName() == 'infographic' ? 'active' : ''}}">{{__('messages.infog')}}</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="{{route('news.index')}}" class="header-nav-link {{ \Request::routeIs('news.*') ? 'active' : '' }}">{{__('messages.news')}}</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="{{route('contact')}}" class="header-nav-link {{ \Request::route()->getName() == 'contact' ? 'active' : ''}}">{{__('messages.contacts')}}</a>
                        </li>
                        @auth()
                            <li class="header-nav-item text-danger" style="color: #007aff">
                                <a  style="color: #007aff" href="{{route('admin.dashboard.index')}}">
                                    <span>Админ панель</span>
                                </a>
                            </li>
                        @endauth
                    </ul>
                </nav>
                <div class="header-action">
                    <div class="header-search">
                        <input type="text" class="header-search-input" placeholder="{{__('messages.find')}}">
                        <img src="{{asset('user/assets/img/icons/search.svg')}}" alt="Search Icon" class="header-search-icon">
                    </div>
                    <div class="lang-select">
                        <form id="language-form" action="{{ route('lang.switch') }}" method="POST">
                            @csrf
                            <select id="language-select" name="locale">
                                <option @if(Session::get('locale') == 'ru') selected @endif      value="ru">Русский</option>
                                <option   @if(Session::get('locale') == 'kz') selected @endif   value="kz">Қазақша</option>
                            </select>
                        </form>
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
                    <span> <a href="#" id="toggleEffect">{{__('messages.bad_vis')}}</a></span>
                </div>
            </div>
        </div>
    </div>
</header>


{{ $slot }}

<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-top">
                <div class="footer-list">
                    <div class="footer-item">
                        <p class="footer-item-title">{{__('messages.contacts')}}</p>
                        <img src="{{asset('user/assets/img/logo-footer.svg')}}" alt="Footer logo" class="footer-logo">
                        <p class="footer-address">
                            <img src="{{asset('user/assets/img/icons/address.svg')}}" alt="Address icon"> {{__('messages.address')}}
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
                        <a href="{{route('home')}}" class="footer-item-link">{{__('messages.home')}}</a>
                        <a href="{{route('about')}}" class="footer-item-link">{{__('messages.about')}}</a>
                        <a href="{{route('reports')}}" class="footer-item-link">{{__('messages.reports')}}</a>
                        <a href="{{route('documentation.index')}}" class="footer-item-link">{{__('messages.docs')}}</a>
                        <a href="{{route('infographic')}}" class="footer-item-link">{{__('messages.infog')}}</a>
                        <a href="{{route('news.index')}}" class="footer-item-link">{{__('messages.news')}}</a>
                        <a href="{{route('contact')}}" class="footer-item-link">{{__('messages.contacts')}}</a>
                    </div>
                    <div class="footer-item">
                        <div class="footer-item-title">{{__('messages.links')}}</div>
                        <a href="#" class="footer-item-link">{{__('messages.president.site')}}</a>
                        <a href="#" class="footer-item-link">{{__('messages.ao.social.site')}}</a>
                        <a href="#" class="footer-item-link">{{__('messages.akimat.astana')}}</a>
                        <a href="#" class="footer-item-link">{{__('messages.court.kz')}}</a>
                        <a href="#" class="footer-item-link">{{__('messages.uni.agro')}}</a>
                        <a href="#" class="footer-item-link">{{__('messages.uni.it')}}</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-company">
                    <p class="text-white text-center">АО «Астана-Энергия» | 2023</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    const languageSelect = document.getElementById('language-select');
    const languageForm = document.getElementById('language-form');

    languageSelect.addEventListener('change', function () {
        languageForm.submit();
    });

    var fontSizeChanged = false;
    document.getElementById('toggleEffect').addEventListener('click', function() {
        var body = document.body;
        body.classList.toggle('grayscale');

        var elements = body.querySelectorAll('*');
        for (var i = 0; i < elements.length; i++) {
            if (fontSizeChanged) {
                elements[i].style.fontSize = '';
            } else {
                var currentFontSize = parseInt(window.getComputedStyle(elements[i], null).getPropertyValue('font-size'));
                elements[i].style.fontSize = (currentFontSize * 1.1) + 'px'; // Increase font size by 20%
            }
        }
        fontSizeChanged = !fontSizeChanged;
    });

</script>

<script src="{{asset('user/assets/js/script.js')}}"></script>
<script src="{{asset('user/assets/js/swiper-bundle.min.js')}}"></script>
</body>
</html>