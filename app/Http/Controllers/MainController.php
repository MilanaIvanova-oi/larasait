<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\About;


class MainController extends Controller
{
    public function index()
    {
        $mains = Main::all();
        $text = "Каталог товаров";
        // Передаём данные в view с ключом 'mains'
        return view('front.main', ['mains' => $mains, 'text' => $text]);
    }
    
    public function about(Request $request)
    {
        if ($request->isMethod('POST')) {
            $abont = new About();
            $abont->title = $request->title;
            $abont->description = $request->description;
            $abont->save();
            return redirect('about');
        }

        return view('front.about');
    }
}
