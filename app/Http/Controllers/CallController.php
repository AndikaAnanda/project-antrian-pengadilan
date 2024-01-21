<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallController extends Controller
{
    public function show () {
        return view('call', [
            'title' => 'Call',
            'stylesheet' => 'call'
        ]);
    }
}
