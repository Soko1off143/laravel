<a href="/Practice/laravel/public/admin/comics">Вернуться назад</a><br><br>
    <form action="/Practice/laravel/public/admin/comics/create/add" method="POST">
        {{ csrf_field() }}
        <label>Название</label>
        <input type="text" name="name" require><br><br>
        <label>Цена</label>
        <input type="text" name="price" require><br><br>
        <label>Детальное описание</label>
        <input type="text" name="detail" require><br><br>
        <label>Издатель</label>
        <input type="text" name="publisher" require><br><br>
        <label>Год выпуска</label>
        <input type="text" name="year" require><br><br>
        <label>Количество страниц</label>
        <input type="text" name="pages" require><br><br>
        <label>Картинка</label>
        <input type="text" name="img" require><br><br>
        <label>Категория</label>
        <input type="text" name="category"><br><br>
        <label>Количество</label>
        <input type="text" name="count" require><br><br>
        <input type="submit">
    </form>