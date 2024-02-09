<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnescapedDataOutputController extends Controller
{
    public function show():string
    {
        return view('unescaped-data-output.unescaped-data-output', [
            'str' => '<b>Hell</b>'
        ]);
    }
}


/*
    Пусть в переменной хранится строка с тегами, например:

	$str = '<b>text</b>';

Выведите эту строку на экран так, чтобы теги выполнили свое действие (то есть чтобы в данном случае текст стал жирным).
*/
