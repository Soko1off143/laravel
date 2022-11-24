<a href="http://localhost/laravel/public/admin">Вернуться назад</a>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Price</td>
        <td>Detail</td>
        <td>Publisher</td>
        <td>Year</td>
        <td>Pages</td>
        <td>Img</td>
        <td>Category</td>
        <td>Count</td>
        <td></td>
    </tr>
    @foreach ($arr as $elem)
        <tr>
            <td>{{$elem->id}}</td>
            <td>{{$elem->name}}</td>
            <td>{{$elem->price}}</td>
            <td>{{$elem->detail}}</td>
            <td>{{$elem->publisher}}</td>
            <td>{{$elem->year}}</td>
            <td>{{$elem->pages}}</td>
            <td>{{$elem->img}}</td>
            <td>{{$elem->category}}</td>
            <td>{{$elem->count}}</td>
            <td>
                <a href="http://localhost/laravel/public/admin/comics/redactor/{{$elem->id}}">Редактировать</a>
                <a href="">Удалить</a>
            </td>
        </tr>
    @endforeach
</table>
<a href="">Добавить Комикс</a>