<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/new.css') }}">
    
    <title>Document</title>
</head>
<body>
@yield('text')
<ul>
    <li><a href="{{ route('index') }}">Главная</a></li>
    <li><a href="{{ route('user') }}">Пользователь</a></li>
    <li><a href="{{ route('product') }}">Продукты</a></li>
    <li><a href="{{ route('about') }}">О нас</a></li>
    <li><a href="{{ route('myadmin') }}">Админка</a></li>
</ul>


@yield('main')
@yield('product')
@yield('user')
@yield('admin')
@yield('about')
<script src="{{ asset('js/script.js') }}"></script> 
</body>
</html>



<?php