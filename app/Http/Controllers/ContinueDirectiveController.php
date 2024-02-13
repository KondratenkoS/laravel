<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContinueDirectiveController extends Controller
{
    public function show():string
    {
        return view('continue_directive.continue_directive', [
            'arr' => [
                1, 0, 3, 0,
                4, 5, 0, 4
            ]
        ]);
    }
}


/*
    #1
    Дан массив с числами. Выведите эти числа в виде списка ul. При выводе пропускайте нулевые элементы.
*/
