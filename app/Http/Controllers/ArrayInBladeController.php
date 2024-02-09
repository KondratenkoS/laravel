<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayInBladeController extends Controller
{
    public function show():string
    {
        return view('array_in_blade.array_in_blade', [
            'worker' => [
                'name' => 'Hell',
                'age' => '35',
                'salary' => '3000',
            ],
            'nums' => [
                2, 3, 4, 5, 6
            ],
        ]);
    }
}


/*
    #1
    Пусть из действия в представление передаются данные работника в виде массива.
    Пусть в массиве будет ключ name, ключ age и ключ salary.
    Выведите каждый элемент массива в отдельном абзаце.

    #2
    Передайте в представление какой-нибудь массив. Выведите на экран количество элементов в этом массиве.
 */
