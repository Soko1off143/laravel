<style>
    @font-face {
        font-family: 'Montserrat SemiBold';
        src: url('media/fonts/Montserrat/Montserrat-SemiBold.ttf');
    }

    * {
        margin: 0;
        padding: 0;
    }

    footer {
        width: 100%;
        height: 370px;
        background-color: #686868;
    }

    .footer {
        width: 90%;
        display: flex;
        justify-content: space-between;
        margin: auto;
    }

    .logo {
        width: 330px;
        height: 330px;
        padding: 20px 0 0 0;
    }

    .footerLinks {
        padding: 20px 0 0 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .footerLinks a {
        font: 35px 'Montserrat SemiBold';
        text-decoration: none;
        color: white;
    }

    .footerLinks a:hover {
        scale: 1.1;
    }

    .footerLinks a:active {
        opacity: 0.5;
    }

    .footerSplit {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .socialsIcons img {
        width: 90px;
        height: 90px;
    }

    .copyright p {
        font: 20px 'Montserrat SemiBold';
        color: white;
        text-align: center;
    }

    .footerInformation p {
        padding: 25px 0 0 0;
        font: 35px 'Montserrat SemiBold';
        color: white;
        text-align: right;
    }
</style>
<footer>
    <div class="footer">
        <img class="logo" src="media/img/logo/Logo_White.png" alt="Logo White">
        <div class="footerLinks">
            <a href="">Каталог</a>
            <a href="">О нас</a>
            <a href="">Где нас найти?</a>
            <a href="">Вход</a>
            <a href="">Регистрация</a>
            <!-- <a href="">Выход</a> -->
        </div>
        <div class="footerSplit">
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
        <div class="footerInformation">
            <p>Funny Comics Land</p>
            <p>Дмитриева, 13,</p>
            <p>644074, Омск.</p>
            <p>Телефон:</p>
            <p>8-800-777-35-82</p>
        </div>
    </div>
</footer>