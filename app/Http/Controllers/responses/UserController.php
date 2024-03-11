<?php

namespace App\Http\Controllers\responses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function error()
    {
        return response('Ошибка со статусом 404', 404);
    }
}
