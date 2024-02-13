<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForeachNestedController extends Controller
{
    public function show():string
    {
        return view('foreach_nested.foreach_nested', [
            'arr' => [[1, 3, 5],
                      [2, 4, 6],
                      [7, 8, 9]],
        ]);
    }
}

/* Передайте из действия в представление двухмерный массив с числами. Выведите его в виде HTML таблицы. */
