<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div>
        <header>
            <div class="header">
                <p><u>Funny Comics Land</u></p>
                <a href="/Practice/laravel/public/">Каталог</a>
                <a href="/Practice/laravel/public/aboutUs">О нас</a>
                <a href="/Practice/laravel/public/wheretofindus">Где нас найти?</a>
                @if (Auth::check())
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Выйти
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a href="/Practice/laravel/public/login">Вход</a>
                    <a href="/Practice/laravel/public/register">Регистрация</a>
                @endif
            </div>
        </header>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
