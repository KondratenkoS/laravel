<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplexConditionsController extends Controller
{
    public function show():string
    {
        return view('complex-conditions.complex-conditions', [
            'arr' => [1, 3, 5, 1]
        ]);
    }
}


/* Пусть из действия в представление передается массив с числами.
Если количество элементов в этом массиве больше нуля, то выведите
на экран сумму этих элементов, а если количество элементов равно
нулю, то выведите сообщение об этом. */
