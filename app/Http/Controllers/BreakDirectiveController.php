<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreakDirectiveController extends Controller
{
    public function show():string
    {
        return view('break_directive.break_directive', [
            'arr' => [
                1, 2, 5, 0,
                3, 5, 6, 1,
            ]
        ]);
    }
}


/*
    #1
    Дан массив с числами. Переберите этот массив циклом до первого нулевого элемента.
*/
