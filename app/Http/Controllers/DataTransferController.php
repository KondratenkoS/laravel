<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTransferController extends Controller
{
    public function dataTransfer():string
    {
        return view('data-transfer.data-transfer',
            ['name' => 'Сергей',
            'surname' => 'Кондратенко',]
        );
    }
}


/*
    Пусть в действии контроллера даны переменные $name и $surname.
    Передайте значения этих переменных в представление и выведите
    содержимое каждой из этих переменных на экран.
*/
