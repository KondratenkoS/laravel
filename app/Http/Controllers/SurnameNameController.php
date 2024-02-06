<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurnameNameController extends Controller
{
    public function show($surname, $name):string
    {
        return 'Ваши имя и фамилия - ' . $name . ' ' . $surname;
    }
}
