<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForeachMultiArraysController extends Controller
{
    public function show(): string
    {
        return view('foreach_multi_arrays.foreach_multi_arrays', [
            'arr' => [
                [
                    'name' => 'user1',
                    'surname' => 'surname1',
                    'salary' => 1000,
                ],
                [
                    'name' => 'user2',
                    'surname' => 'surname2',
                    'salary' => 2000,
                ],
                [
                    'name' => 'user3',
                    'surname' => 'surname3',
                    'salary' => 3000,
                ],
            ],
        ]);
    }
}

/*
    #1
    Передайте из действия в представление массив с работниками:
    $employees = [
		[
			'name' => 'user1',
			'surname' => 'surname1',
			'salary' => 1000,
		],
		[
			'name' => 'user2',
			'surname' => 'surname2',
			'salary' => 2000,
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'salary' => 3000,
		],
	];

    #2
    Выведите массив из предыдущей задачи в виде HTML таблицы.
*/
