<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariableOutputController extends Controller
{
    public function show(): string
    {
        return view('variable_output.variable_output', [
                'name' => 'Сергей',
                'age' => 35,
                'salary' => 3000,
            ]

        );
    }
}


/* Пусть в действии контроллера даны переменные $name, $age и $salary.
Передайте значения этих переменных в представление и выведите содержимое
каждой из этих переменных в отдельном абзаце. */
