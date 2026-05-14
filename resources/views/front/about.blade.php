@extends('front.basa')
@section('about')

    <div class="updatecategory-main">
        <form method="post" action="{{ route('about') }}" id="updatecat" name="updatecat">
            @csrf
            <div class="form-group">
                <label for="name">Тема сообщения</label>
                <input type="text" class="form-control" id="title" name="title" ">
            </div>
            <div class="form-group">
                <label for="body">Текст сообщения</label>
                <textarea class="form-control" id="description"  name="description" "></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    
@endsection

