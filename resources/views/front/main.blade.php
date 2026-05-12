@extends('front.basa')
@section('main')
    @section('text')
        <h1>{{ $text }}</h1>
    @endsection

    <div class="intro-section">
        <h2>Добро пожаловать в наш каталог!</h2>
        <p>Здесь вы найдёте лучшие товары по выгодным ценам. Мы тщательно отбираем каждую позицию, чтобы предложить вам только качественную продукцию. Приятных покупок!</p>
    </div>

    <div class="content">
        @foreach ($mains as $value)
        <div class="card">
            <img class="img_card" src="{{$value->image}}" alt="">
            <div class="title">{{ $value->title ?? $value->titl }}</div>
            <p class="price">{{$value->price}}</p>
            <p class="desc">{{$value->description}}</p>
        </div>
        @endforeach
    </div>
@endsection
