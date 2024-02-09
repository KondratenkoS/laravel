<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariablesToAttributesController extends Controller
{
    public function show1(): string
    {
        return view('variables_to_attributes.variables_to_attributes',
            [
                'css_style' => 'color: red',
                'value1' => 'Значение первое',
                'value2' => 'Значение второе',
                'value3' => 'Значение третье',
                'href' => 'https://www.google.com/webhp',
                'text' => 'Google search',
            ]
        );
    }
}

/*
    #1
    Пусть в действии дана переменная, содержащая CSS класс. Передайте эту переменную в
    представление и для какого-нибудь тега значением атрибута class укажите нашу переменную.

    #2
    Пусть в представлении даны 3 инпута. Передайте из действия в представление 3 переменные,
    значения которых запишите в атрибуты value наших инпутов.

    #3
    Пусть в действии дана переменная $text, содержащая текст ссылки, и переменная $href,
    содержащая адрес ссылки. Передайте эти переменные в представление и сформируйте с их
    помощью HTML ссылку.

    #4
    Выведите в представлении текущую дату в формате день.месяц.год.
*/
