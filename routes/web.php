<?php

use App\Http\Controllers\ArrayInBladeController;
use App\Http\Controllers\BreakDirectiveController;
use App\Http\Controllers\ComplexConditionsController;
use App\Http\Controllers\ConditionsController;
use App\Http\Controllers\ContinueDirectiveController;
use App\Http\Controllers\DataTransferController;
use App\Http\Controllers\ElseController;
use App\Http\Controllers\ElseIfController;
use App\Http\Controllers\ForDirectiveController;
use App\Http\Controllers\ForeachBladeController;
use App\Http\Controllers\ForeachMultiArraysController;
use App\Http\Controllers\ForeachNestedController;
use App\Http\Controllers\ForelseDirectiveController;
use App\Http\Controllers\IfForeachController;
use App\Http\Controllers\NameController;
use App\Http\Controllers\PhpCodeBlockController;
use App\Http\Controllers\PracticumController;
use App\Http\Controllers\SurnameNameController;
use App\Http\Controllers\TernaryOperatorController;
use App\Http\Controllers\TestViewController;
use App\Http\Controllers\UnescapedDataOutputController;
use App\Http\Controllers\UnlessController;
use App\Http\Controllers\UserCityController;
use App\Http\Controllers\VariableLoopController;
use App\Http\Controllers\VariableOutputController;
use App\Http\Controllers\VariablesToAttributesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* COLLECTION */
Route::get('/collection', );



/* VIEWS AND BLADE*/
/* Сделайте представление(hello.blade.php) для какого-нибудь действия одного из ваших контроллеров. */
Route::get('/testview', [TestViewController::class, 'show']);

/*  Пусть в действии контроллера даны переменные $name и $surname.
    Передайте значения этих переменных в представление и выведите
    содержимое каждой из этих переменных на экран. */
Route::get('/datatransfer', [DataTransferController::class, 'dataTransfer']);

/* Пусть в действии контроллера даны переменные $name, $age и $salary. Передайте значения этих переменных
 в представление и выведите содержимое каждой из этих переменных в отдельном абзаце. */
Route::get('/variable_output', [VariableOutputController::class, 'show']);

/* Пусть в действии дана переменная, содержащая CSS класс. Передайте эту переменную в представление
 и для какого-нибудь тега значением атрибута class укажите нашу переменную. */
Route::get('/attr1', [VariablesToAttributesController::class, 'show1']);

/* Пусть из действия в представление передаются данные работника в виде массива.
Пусть в массиве будет ключ name, ключ age и ключ salary.
Выведите каждый элемент массива в отдельном абзаце. */
Route::get('/array_in_blade', [ArrayInBladeController::class, 'show']);

/* Пусть из действия в представление передается переменная $city. Выведите в представлении названия города
 из этой переменной. Если же город не передан - пусть по умолчанию выведется город 'Москва'. */
Route::get('/ternary_operator', [TernaryOperatorController::class, 'show']);

/* Выведите строку на экран так, чтобы теги выполнили свое действие (то есть чтобы в данном случае текст стал жирным). */
Route::get('/unescaped-data-output', [UnescapedDataOutputController::class, 'show']);

/* Пусть из действия в представление передается переменная, содержащая возраст пользователя.
Покажите в представлении текст только для пользователей старше 18 лет. */
Route::get('/conditions', [ConditionsController::class, 'show']);

/* Выведите разный текст для пользователя старше и младше 18 лет. */
Route::get('/else', [ElseController::class, 'show']);

/* Выведите разный текст для пользователя старше, младше, и для тех, кому сейчас ровно 18 лет. */
Route::get('/elseif', [ElseIfController::class, 'show']);

/* Пусть из действия в представление передается возраст пользователя. Если возраст пользователь несовершеннолетний,
то выведите сообщение об этом. Для решения задачи воспользуйтесь директивой @unless. */
Route::get('/unless', [UnlessController::class, 'show']);

/*Пусть из действия в представление передается массив с числами. Если количество элементов в этом массиве больше нуля,
то выведите на экран сумму этих элементов, а если количество элементов равно нулю, то выведите сообщение об этом.*/
Route::get('/complex-conditions', [ComplexConditionsController::class, 'show']);

/*Передайте из действия в представление массив с числами. Выведите этот массив в виде списка ul.*/
Route::get('/foreach', [ForeachBladeController::class, 'show']);

/* Передайте из действия в представление массив с числами. Выведите этот массив в виде списка ul.
Сделайте так, чтобы в список попадали только элементы, значениями которых служат четные числа. */
Route::get('/if_foreach', [IfForeachController::class, 'show']);

/* Передайте из действия в представление двухмерный массив с числами. Выведите его в виде HTML таблицы. */
Route::get('/foreach_nested', [ForeachNestedController::class, 'show']);

/* Передайте из действия в представление массив с работниками, выведите массив в виде списка и HTML таблицы */
Route::get('/foreach_multi_arrays', [ForeachMultiArraysController::class, 'show']);

/* Дан массив с именами юзеров. Если в массиве есть элементы, то выведите каждый элемент в своем абзаце.
Если элементов нет, выведите сообщение об этом. */
Route::get('/forelse_directive', [ForelseDirectiveController::class, 'show']);

/* Задачи на переменную - $loop */
Route::get('/variable_loop', [VariableLoopController::class, 'show']);

/* Дан массив с числами. Переберите этот массив циклом до первого нулевого элемента. */
Route::get('/break_directive', [BreakDirectiveController::class, 'show']);

/* Дан массив с числами. Выведите эти числа в виде списка ul. При выводе пропускайте нулевые элементы. */
Route::get('/continue_directive', [ContinueDirectiveController::class, 'show']);

/* С помощью цикла @for выведите 10 абзацев, заполненных числами от 1 до 10. */
Route::get('/for_directive', [ForDirectiveController::class, 'show']);

/* Вставка блока кода с php */
Route::get('/php_code_block', [PhpCodeBlockController::class, 'show']);

/* ПРАКТИКА НА BLADE */
/* Сосдаём ссылку */
Route::get('/href', [PracticumController::class, 'href']);

/* Выводим работников */
Route::get('/employees', [PracticumController::class, 'employees']);

/* Статусы работников */
Route::get('/banned', [PracticumController::class, 'banned']);

/* Из действия в представление передается массив со строками. Переберите этот массив циклом и в каждой итерации
    цикла создайте инпут, сделав значением инпута элемент массива. */
Route::get('/input', [PracticumController::class, 'input']);

/* Сделайте в действии контроллера массив с числами от 1 до последнего дня текущего месяца.
    Передайте этот массив в представление. Сделайте также переменную, в которой будет хранится номер текущего дня.
    Также передайте эту переменную в представление.

    Переберите циклом переданный массив и выведите его в виде списка ul. При этом тегу li,
    в котором хранится номер текущего дня месяца добавьте класс active. */
Route::get('/days_of_month', [PracticumController::class, 'days_of_month']);






/* ROUTES AND CONTROLLERS */
/* Сделайте так, чтобы при обращении на адрес /user вызывалось действие show контроллера UserController. */
Route::get('/user', [UserController::class, 'show']);

/* Сделайте так, чтобы при обращении на адрес /user/all вызывалось действие all контроллера UserController. */
Route::get('/user/all', [UserController::class, 'all']);

/* Сделайте маршрут, обрабатывающий адреса вида /users/:name. */
Route::get('/users/{name}', [NameController::class, 'show']);

/* Сделайте маршрут, обрабатывающий адреса вида /user/:surname/:name. */
Route::get('/users/{surname}/{name}', [SurnameNameController::class, 'show']);

/* Создайте маршрут, который параметром будет принимать имя юзера,
а в браузером результатом отправлять его город. */
Route::get('/username/{name}', [UserCityController::class, 'show']);



/* ЗАДАЧКИ НА МАРШРУТЫ */
/* тест сообщение */
Route::get('/', function () {
    return 'Hello Hell!';
});

/* Сделайте так, чтобы при обращении на адрес /test в браузер выводилось какое-нибудь сообщение. */
Route::get('/test', function () {
    return 'Это тестовое сообщение на URI /test';
});

/* Сделайте так, чтобы при обращении на адрес /dir/test в браузер выводилось какое-нибудь сообщение. */
Route::get('/dir/test', function () {
    return 'Это тестовое сообщение на URI /dir/test';
});

/* Сделайте маршрут, обрабатывающий адреса вида /user/:name, где вместо :name может быть любая строка. */
Route::get('/user/{name}', function ($name) {
    return "В {name} находится - " . $name;
});

/* Сделайте маршрут, обрабатывающий адреса вида /user/:surname/:name/, где параметры задают имя и фамилию юзера. */
Route::get('/username/{surname}/{name}', function ($surname, $name) {
    return "Имя и фамилия пользователя - " . $surname . ' ' . $name;
});

/* Пусть дан адрес вида /city/:city, где в параметре будет задаваться город.
 Сделайте так, чтобы город был необязательным параметром и по умолчанию имел значение Chernigiv. */
Route::get('/city/{city?}', function ($city = 'Chernigiv') {
    return 'Название города - ' . $city;
});

/* Сделайте маршрут вида /user/:id, где вместо :id должно быть число. */
Route::get('/num/{id}', function ($id) {
    return $id;
})->where('id', '[0-9]+');

/* Сделайте маршрут вида /user/:id/:name, где вместо :id должно быть число,
 а вместо :name - строка, состоящая из маленьких латинских букв количеством более 2-х. */
Route::get('/user/{name}/{id}', function ($name, $id) {
    return 'Под номером - ' . $id . ' пользователь под именем - ' . $name;
})->where('id', '[0-9]+')->where('name', '[a-z].+');

/* Сделайте маршрут вида /posts/:date, где вместо :date должна быть дата в формате год-месяц-день. */
Route::get('/posts/{date}', function ($date) {
    return 'Дата - ' . $date;
})->where('date', '\d{4}-\d{2}-\d{2}');

/* Сделайте маршрут вида /:year/:month/:day, где вместо :year должен быть год,
 вместо :month - месяц, вместо :day - день. */
Route::get('/posts/{year}/{month}/{day}', function ($year, $month, $day) {
    return 'Дата - ' . $year . '-' . $month . '-' . $day;
})  ->where('year', '\d{4}')
    ->where('month', '\d{2}')
    ->where('day', '\d{2}');

/* Сделайте маршрут вида /users/:order, где вместо :order должно быть одно из значений:
 'name', 'surname' или 'age'. */
Route::get('/users/{order}', function ($order){
    return $order;
})->where('order', '(name)|(surname)|(age)');

/* Сделайте маршрут вида /number/:id, где вместо :id должно быть число. */
Route::get('/number/{id}', function ($id){
    return $id;
})->whereNumber('id');

/* Сделайте маршрут вида /city/:name, где вместо :name должны быть буквы. */
Route::get('/cityname/{name}', function ($name){
    return $name;
})->whereAlpha('name');

/* Наложите глобальное ограничение на параметр slug. Пусть он может содержать
буквы и цифры, а также дефис и подчеркивание. */
Route::get('/global/{slug}', function ($slug){
    return $slug;
});
