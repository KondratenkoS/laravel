<?php

namespace App\Http\Controllers\cookie;

use App\Http\Controllers\Controller;
use http\Cookie;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function set_cookie()
    {
        Cookie::queue('name', 'value', 10);
        return response('Какой-то текст');
    }

    public function get_cookie(Request $request)
    {
        $cookie = $request->cookie('name_cookie');

        return view('cookie.cookie', [
            'data' => $cookie
        ]);
    }
}
