<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnlessController extends Controller
{
    public function show():string
    {
        return view('unless.unless', [
            'age' => 17,
        ]);
    }
}

/*  Пусть из действия в представление передается возраст пользователя.
    Если возраст пользователь несовершеннолетний, то выведите сообщение об этом.
    Для решения задачи воспользуйтесь директивой @unless. */
