<div class="comics">
    <div class="navigation">
        <a href="/Practice/laravel/public/">Вернуться назад</a>
        <a href="">Перейти в корзину</a>
    </div>
    @foreach ($arr as $elem)
        <h1>{{$elem->name}}</h1>
    <div class="detail">
        <div class="comicsImg">
            <img src="{{$elem->img}}" alt="Картинка {{$elem->id}}">
        </div>
        <div class="detailText">
            <div class="price">
                <h2>{{$elem->price}} руб.</h2>
                <input type="button" value="КУПИТЬ">
            </div>
            <div class="description">
                <h3>Описание товара</h3>
                <p>{{$elem->detail}}</p>
            </div>
        </div>
    </div>
    <div class="characteristics">
        <h3>Характеристики</h3>
        <p>Издательство: {{$elem->publisher}}</p>
        <p>Год выпуска: {{$elem->year}}</p>
        <p>Количество страниц: {{$elem->pages}}</p>
        <p>Категория: {{$elem->category}}</p>
    </div>
    @endforeach
</div>