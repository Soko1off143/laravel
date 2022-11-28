<div class="productList">
@foreach ($arr as $elem)
    <div class="line">
        <div class="product">
            <img src="{{$elem->img}}" alt="Картинка {{$elem->id}}">
            <h4>{{$elem->price}} руб</h4>
            <a href="/Practice/laravel/public/comics{{$elem->id}}"><p>{{$elem->name}}</p></a>
            <input type="button" value="Купить">
        </div>
    </div>
    @endforeach
</div>