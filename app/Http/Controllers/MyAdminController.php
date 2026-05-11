<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MyAdminControler extends Controller
{

    public function index(){
        return view('admin.index');
    }

}