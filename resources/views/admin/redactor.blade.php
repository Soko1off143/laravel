<a href="http://localhost/laravel/public/admin/comics">Вернуться назад</a>
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
            <td><textarea>"{{$elem->name}}"</textarea></td>
            <td><textarea>{{$elem->price}}</textarea></td>
            <td><textarea cols="30" rows="10">{{$elem->detail}}</textarea></td>
            <td><textarea>{{$elem->publisher}}</textarea></td>
            <td><textarea>{{$elem->year}}</textarea></td>
            <td><textarea>{{$elem->pages}}</textarea></td>
            <td><textarea>{{$elem->img}}</textarea></td>
            <td><textarea>{{$elem->category}}</textarea></td>
            <td><textarea>{{$elem->count}}</textarea></td>
        </tr>
    @endforeach
</table>
<input type="submit">