<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForDirectiveController extends Controller
{
    public function show(): string
    {
        return view('for_directive.for_directive', [
            'arr' => 10
        ]);
    }
}


/*
    #1
    С помощью цикла @for выведите 10 абзацев, заполненных числами от 1 до 10.
 */
