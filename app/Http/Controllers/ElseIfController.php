<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElseIfController extends Controller
{
    public function show():string
    {
        return view('elseif.elseif', [
            'age' => 14,
        ]);
    }
}

/*
    Выведите разный текст для пользователя старше, младше, и для тех, кому сейчас ровно 18 лет.
*/
