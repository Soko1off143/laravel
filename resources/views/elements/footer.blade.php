<footer>
    <div class="footer">
        <img class="logo" src="media/img/logo/Logo_White.png" alt="Logo White">
        <div class="links">
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
        <div class="split">
            <div class="socialsIcons">
                <a href="https://vk.com" target="_blank"><img src="media/img/socials/vk.png" alt=""></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="media/img/socials/instagram.png" alt=""></a>
                <a href="https://ok.ru/" target="_blank"><img src="media/img/socials/ok.png" alt=""></a>
                <a href="https://telegram.org/" target="_blank"><img src="media/img/socials/telegram.png" alt=""></a>
            </div>
            <div class="copyright">
                <p>Copyright © 2021-2022</p>
                <p>Интернет-магазин комиксов</p>
                <p>Funny Comics Land</p>
            </div>
        </div>
        <div class="information">
            <p>Funny Comics Land</p>
            <p>Дмитриева, 13,</p>
            <p>644074, Омск.</p>
            <p>Телефон:</p>
            <p>8-800-777-35-82</p>
        </div>
    </div>
</footer>