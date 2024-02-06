<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCityController extends Controller
{
    public function show($name):string
    {
        $users = [
            'user1' => 'city1',
            'user2' => 'city2',
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5',
        ];

        if (array_key_exists($name, $users)) {
            return $users[$name];
        } else {
            return 'Вашего имени нет в списке';
        }


    }
}


/*
    Пусть есть массив с именами юзеров и их городами:
	$users = [
		'user1' => 'city1',
		'user2' => 'city2',
		'user3' => 'city3',
		'user4' => 'city4',
		'user5' => 'city5',
	];
*/
