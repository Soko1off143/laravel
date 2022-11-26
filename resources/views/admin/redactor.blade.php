<a href="/Practice/laravel/public/admin/comics">Вернуться назад</a><br><br>
@foreach ($arr as $elem)
    <form action="/Practice/laravel/public/admin/comics/redactor{id}/change" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$elem->id}}" >
        <label>Название</label>
        <input type="text" value="{{$elem->name}}" name="name"><br><br>
        <label>Цена</label>
        <input type="text" value="{{$elem->price}}" name="price"><br><br>
        <label>Детальное описание</label>
        <input type="text" value="{{$elem->detail}}" name="detail"><br><br>
        <label>Издатель</label>
        <input type="text" value="{{$elem->publisher}}" name="publisher"><br><br>
        <label>Год выпуска</label>
        <input type="text" value="{{$elem->year}}" name="year"><br><br>
        <label>Количество страниц</label>
        <input type="text" value="{{$elem->pages}}" name="pages"><br><br>
        <label>Картинка</label>
        <input type="text" value="{{$elem->img}}" name="img"><br><br>
        <label>Категория</label>
        <input type="text" value="{{$elem->category}}" name="category"><br><br>
        <label>Количество</label>
        <input type="text" value="{{$elem->count}}" name="count"><br><br>
        <input type="submit">
    </form>
@endforeach