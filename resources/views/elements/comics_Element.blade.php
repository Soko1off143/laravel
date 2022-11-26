<div class="comics">
    @foreach ($arr as $elem)
        <img src="{{$elem->img}}" alt="Картинка {{$elem->id}}">
        <h1>Название: {{$elem->name}}</h1>
        <h2>Цена: {{$elem->price}}</h2>
        <p>Описание товара: {{$elem->detail}}</p>
        <h3>Характеристики</h3>
        <p>Издательство: {{$elem->publisher}}</p>
        <p>Год выпуска: {{$elem->year}}</p>
        <p>Количество страниц: {{$elem->pages}}</p>
        <p>Категория: {{$elem->category}}</p>
    @endforeach
</div>