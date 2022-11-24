<header>
    <div class="header">
        <p><u>Funny Comics Land</u></p>
        <a href="http://localhost/laravel/public/catalog">Каталог</a>
        <a href="">О нас</a>
        <a href="http://localhost/laravel/public/wheretofindus">Где нас найти?</a>
        @if (Auth::check())
            <a href="http://localhost/laravel/public/logout">Выход</a>
        @else
            <a href="http://localhost/laravel/public/login">Вход</a>
            <a href="http://localhost/laravel/public/register">Регистрация</a>
        @endif
    </div>
</header>