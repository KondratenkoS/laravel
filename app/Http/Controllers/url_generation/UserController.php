<?php

namespace App\Http\Controllers\url_generation;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    public function url_generation()
    {
        $user = User::find(7);
        dump($user['name']);

        echo url("url_generation_test/{$user->name}") . '<br>';
        echo url()->current() . '<br>';
        echo url()->full() . '<br>';
        echo url()->previous() . '<br>';
        echo URL::current() . '<br>';

    }
}
