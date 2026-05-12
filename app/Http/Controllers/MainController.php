<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class MainController extends Controller
{
    public function index()
    {
        $mains = Main::all();
        $text = "Каталог товаров";
        // Передаём данные в view с ключом 'mains'
        return view('front.main', ['mains' => $mains, 'text' => $text]);
    }
}