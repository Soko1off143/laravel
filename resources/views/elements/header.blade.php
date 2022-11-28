@vite(['resources/sass/app.scss', 'resources/js/app.js'])
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