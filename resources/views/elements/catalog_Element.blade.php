<div class="productList">
    <div class="line">
    @foreach ($arr as $elem)
        <div class="product">
            <img src="{{$elem->img}}" alt="Картинка {{$elem->id}}">
            <h4>{{$elem->price}} руб</h4>
            <a href="comics{{$elem->id}}"><p>{{$elem->name}}</p></a>
            <input type="button" value="Купить">
        </div>
        @endforeach
    </div>
</div>
