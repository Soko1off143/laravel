<a href="/Practice/laravel/public/admin/comics">Вернуться назад</a><br><br>
@foreach ($arr as $elem)
    <form action="/Practice/laravel/public/admin/comics/redactor{id}/change" method="POST">
        <label>Название</label>
        <input type="text" value="{{$elem->name}}"><br><br>
        <label>Цена</label>
        <input type="text" value="{{$elem->price}}"><br><br>
        <label>Детальное описание</label>

        <input type="text" value="{{$elem->detail}}"><br><br>
        <label>Издатель</label>
        <input type="text" value="{{$elem->publisher}}"><br><br>
        <label>Год выпуска</label>
        <input type="text" value="{{$elem->year}}"><br><br>
        <label>Количество страниц</label>
        <input type="text" value="{{$elem->pages}}"><br><br>
        <label>Картинка</label>
        <input type="text" value="{{$elem->img}}"><br><br>
        <label>Категория</label>
        <input type="text" value="{{$elem->category}}"><br><br>
        <label>Количество</label>
        <input type="text" value="{{$elem->count}}"><br><br>
        <input type="submit">
    </form>
@endforeach