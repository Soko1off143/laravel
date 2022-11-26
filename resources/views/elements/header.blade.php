<header>
    <div class="header">
        <p><u>Funny Comics Land</u></p>
        <a href="/Practice/laravel/public/catalog">Каталог</a>
        <a href="/Practice/laravel/public/">О нас</a>
        <a href="/Practice/laravel/public/wheretofindus">Где нас найти?</a>
        @if (Auth::check())
            <a href="/Practice/laravel/public/logout">Выход</a>
        @else
            <a href="/Practice/laravel/public/login">Вход</a>
            <a href="/Practice/laravel/public/register">Регистрация</a>
        @endif
    </div>
</header>