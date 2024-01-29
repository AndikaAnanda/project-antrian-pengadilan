<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() {
        return view('user/home', [
            "title" => "Home",
            "stylesheet" => "home"
        ]);
    }
}
