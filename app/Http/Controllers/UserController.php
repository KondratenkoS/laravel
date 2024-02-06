<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


/* ЗАДАЧИ НА КОНТРОЛЛЕРЫ */

/* Создайте контроллер UserController и в нем сделайте действие show. */
class UserController extends Controller
{
    public function show():string
    {
        return 'Fuck you';
    }

    public function all():string
    {
        return 'Do whatever they say';
    }
}
