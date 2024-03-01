<?php

namespace App\Http\Controllers\practice;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('practice.users_table', [
            'users' => User::paginate(15),
        ]);
    }
}
