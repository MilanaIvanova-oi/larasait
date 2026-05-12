@extends('front.basa')
@section('main')
    @foreach ($products as $product)
    <p>Продукт = {{ $product->name }} со стоимостью {{ $product->sale }} количеством {{ $product->quantity }}</p>
@endforeach
@endsection

