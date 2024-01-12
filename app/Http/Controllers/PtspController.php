<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PtspController extends Controller
{
    public function show() {
        return view('ptsp', [
            'title' => "Ptsp",
            'stylesheet' => 'ptsp'
        ]);
    }

    public function addNumber() {
        
    }
}