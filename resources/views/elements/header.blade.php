<style>
    @font-face {
        font-family: 'Montserrat SemiBold';
        src: url('media/fonts/Montserrat/Montserrat-SemiBoldIralic.ttf');
    }

    @font-face {
        font-family: 'Montserrat ExtraBold';
        src: url('media/fonts/Montserrat/Montserrat-ExtraBold.ttf');
    }

    * {
        margin: 0;
        padding: 0;
    }

    header {
        width: 100%;
        height: 90px;
        background-color: #686868;
    }

    .header {
        width: 90%;
        display: flex;
        justify-content: space-between;
        margin: auto;
    }

    .header a {
        padding: 16px 0 0 0;
        font: 35px 'Montserrat SemiBold';
        text-decoration: none;
        color: white;
    }

    .header a:hover {
        scale: 1.2;
    }

    .header a:active {
        opacity: 0.5;
    }

    .header p {
        padding: 16px 0 0 0;
        font: 35px 'Montserrat ExtraBold';
        color: white;
    }
</style>
<body>
    <header>
        <div class="header">
            <p><u>Funny Comics Land</u></p>
            <a href="">Каталог</a>
            <a href="">О нас</a>
            <a href="">Где нас найти?</a>
            <a href="">Вход</a>
            <a href="">Регистрация</a>
            <!-- <a href="">Выход</a> -->
        </div>
    </header>
</body>