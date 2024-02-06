<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function show($name):string
    {
        return 'Вы ввели имя - ' . $name;
    }
}
