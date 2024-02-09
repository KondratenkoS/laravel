<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElseController extends Controller
{
    public function show():string
    {
        return view('else.else', [
            'age' => 35,
        ]);
    }
}
