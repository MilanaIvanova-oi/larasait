<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $my_name = "Иван";
        $text = "Пользовательская страница";
        return view('front.user', ['name' => $my_name, 'text' => $text]);
        // Логика для отображения списка пользователей
    }
}
