<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticumController extends Controller
{
    public function href(): string
    {
        return view('href_practice.href_practice', [
            'arr' => [
                [
                    'text' => 'text1',
                    'href' => 'href1',
                ],
                [
                    'text' => 'text2',
                    'href' => 'href2',
                ],
                [
                    'text' => 'text3',
                    'href' => 'href3',
                ],
            ],
        ]);
    }

    public function employees():string
    {
        return view('employees.employees', [
            'employees' => [
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
                [
                    'name' => 'user4',
                    'surname' => 'surname4',
                    'salary' => 4000,
                ],
                [
                    'name' => 'user5',
                    'surname' => 'surname5',
                    'salary' => 5000,
                ],
            ]
        ]);
    }

    public function banned():string
    {
        return view('banned.banned', [
            'users' => [
                [
                    'name' => 'user1',
                    'surname' => 'surname1',
                    'banned' => true,
                ],
                [
                    'name' => 'user2',
                    'surname' => 'surname2',
                    'banned' => false,
                ],
                [
                    'name' => 'user3',
                    'surname' => 'surname3',
                    'banned' => true,
                ],
                [
                    'name' => 'user4',
                    'surname' => 'surname4',
                    'banned' => false,
                ],
                [
                    'name' => 'user5',
                    'surname' => 'surname5',
                    'banned' => false,
                ],
            ]
        ]);
    }

    public function input():string
    {
        return view('input.input', [
            'str' => [
                'string1',
                'string2',
                'string3',
                'string4',
            ]
        ]);
    }

    public function days_of_month():string
    {
        return view('days_of_month.days_of_month', [
            'day' => date('d'),
            'day_in_month' => range(1, date('t')),
        ]);
    }
}


/*
    #1
    Передайте из действия в представление массив ссылок

    #2
    Модифицируйте предыдущую задачу так, чтобы каждая ссылка выводилась в отдельном теге li тега ul.

    #3
    Вывести массив работников в виде таблицы

    #4
    Модифицируйте предыдущую задачу так, чтобы в первом ряду появились заголовки таблицы

    #5
    Модифицируйте предыдущую задачу так, чтобы появилась еще одна колонка в начале таблицы,
    в которой будут выводится порядковые номера работников (то есть ключи элементов массива).
    Нумерация должна начинаться с единицы, а не с нуля.

    #6
    Модифицируйте предыдущую задачу так, чтобы на экран выводились только работники с зарплатой более 2000.

    #7
    Выведите этот массив в виде HTML таблицы с тремя колонками: имя, фамилия и статус.
    В последней колонке должен выводится статус пользователя: забанен он или нет.
    Если ключ banned для данного пользователя имеет значение true, то выводите слово 'забанен',
    а если false, то слово 'активен'.

    #8
    Модифицируйте предыдущую задачу так, чтобы цвет текста tr с забаненным пользователем был красного цвета,
    а с активным пользователем - зеленого.

    #9
    Из действия в представление передается массив со строками. Переберите этот массив циклом и в каждой итерации
    цикла создайте инпут, сделав значением инпута элемент массива.

    #10
    Из действия в представление передается массив со строками. Сделайте из этого массива выпадающий список select.

    #11
    Сделайте в действии контроллера массив с числами от 1 до последнего дня текущего месяца.
    Передайте этот массив в представление. Сделайте также переменную, в которой будет хранится номер текущего дня.
    Также передайте эту переменную в представление.

    Переберите циклом переданный массив и выведите его в виде списка ul. При этом тегу li,
    в котором хранится номер текущего дня месяца добавьте класс active.
*/
