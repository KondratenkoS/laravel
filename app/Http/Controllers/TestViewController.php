<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestViewController extends Controller
{
    public function show()
    {
        return view('hello.hello');
    }
}
