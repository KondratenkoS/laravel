<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariableLoopController extends Controller
{
    public function show(): string
    {
        return view('variable_loop.variable_loop', [
            'arr' => [
                'string1',
                'string2',
                'string3',
                'string4',
                'string5',
                'string6',
                'string7',
            ]
        ]);
    }
}

/*
    #1
    Из действия в представление передается массив со строками.
    Выведите элементы этого массива в виде списка ul. Сделайте так,
    чтобы перед значением элемента, выводился еще и порядковый номер итерации, начиная с 0.

    #2
    Модифицируйте предыдущую задачу так, чтобы порядковый номер итерации начинался с 1.

    #3
    Модифицируйте предыдущую задачу так, чтобы для первой li добавлялся CSS класс first,
    а для последней - класс last.

    #4
    Из действия в представление передается массив со строками. Выведите каждый элемент этого
    массива в своем теге b, а три последних элемента массива - в теге i.
 */
