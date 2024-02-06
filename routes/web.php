<?php

use App\Http\Controllers\NameController;
use App\Http\Controllers\SurnameNameController;
use App\Http\Controllers\UserCityController;
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
Route::get('/post/{date}', function ($date) {
    return 'Дата - ' . $date;
})->where('date', '\d{4}-\d{2}-\d{2}');

/* Сделайте маршрут вида /:year/:month/:day, где вместо :year должен быть год,
 вместо :month - месяц, вместо :day - день. */
Route::get('/post/{year}/{month}/{day}', function ($year, $month, $day) {
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
