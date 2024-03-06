<?php

namespace App\Http\Controllers\sessions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $counter=$request->session()->get('key', 1);
        $request->session()->put('key', $counter + 1); // счетчик обновлений страницы

        $time=$request->session()->get('time', date('H:i:s'));
        $request->session()->put('time', date('H:i:s')); // обновление времени

        $str=$request->session()->get('str', 'Hello'); // для удаления из сессии
//        $request->session()->forget('str');
//        $request->session()->flush();

        $all=$request->session()->all();

        if(!$request->session()->exists('time')){
            $time=$request->session()->get('time', date('H:i:s'));
            $request->session()->put('time', date('H:i:s'));
        }

        $request->session()->put('arr1', ['123', '1234', '345']); // массив в сессию
        $request->session()->push('arr1', 456);

        session([
            'name' => 'Hell',
            'surname' => 'Helluch',
            'salary' => 3500
        ]);
        $name = session('name');
        $surname = session('surname');
        $salary = session('salary');

        return view('sessions_variables.sessions_variables', [
            'counter' => $counter,
            'time' => $time,
            'delete' => $str,
            'all' => $all,
            'arr' => $request->session()->get('arr1'),
            'name' => $name,
            'surname' => $surname,
            'salary' => $salary,
        ]);
    }
}
