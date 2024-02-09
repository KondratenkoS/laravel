<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionsController extends Controller
{
    public function show():string
    {
        return view('conditions.conditions', [
            'age' => 45,
        ]);
    }
}


/*
    #1
    Пусть из действия в представление передается переменная, содержащая возраст пользователя.
    Покажите в представлении текст только для пользователей старше 18 лет.
*/
