<?php

namespace App\Http\Controllers\redirect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function choose_num(Request $request)
    {
        $num = $request->input('num');

        if($num >= 10){
            return redirect('/redirects/result');
        }

        return view('redirects.choose_num', [
            'num' => $num
        ]);
    }

    public function result(Request $request)
    {
        return view('redirects.result', [
            'str' => 'Вы ввели слишком большое число'
        ]);
    }
}
