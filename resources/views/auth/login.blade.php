<!doctype html>
<body lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>АСТАНА ЭНЕРГИЯ | @yield('title')</title>
    <!-- SNEAT imports start -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('adminAssets/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('adminAssets/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('adminAssets/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('adminAssets/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('adminAssets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('adminAssets/assets/vendor/css/pages/page-auth.css')}}" />

    <!-- Helpers -->
    <script src="{{asset('adminAssets/assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('adminAssets/assets/js/config.js')}}"></script>
</head>
<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">

                <div class="card">
                    <div class="card-body">
                        <div class="app-brand justify-content-center">
                            <span class="app-brand-text text-body fw-bold">Astana Energy</span>
                        </div>

                        <h4 class="mb-2">Добро пожаловать! 👋</h4>
                        <p class="mb-4">Админ панель доступна исключительно для сотрудников компании
                            и любые попытки несанкционированного доступа
                            будут пресекаться в соответствии с законодательством РК.</p>
                        <form id="formAuthentication" class="mb-3" action="{{route('login.post')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Адрес электронной почты</label>
                                <input
                                        type="text"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="example@example.kz"
                                        autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Пароль</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input
                                            type="password"
                                            id="password"
                                            class="form-control"
                                            name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Войти в систему</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>
<script src="{{asset('adminAssets/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('adminAssets/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('adminAssets/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('adminAssets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('adminAssets/assets/vendor/js/menu.js')}}"></script>

<script src="{{asset('adminAssets/assets/js/main.js')}}"></script>
<script src="{{asset('adminAssets/assets/js/dashboards-analytics.js')}}"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>