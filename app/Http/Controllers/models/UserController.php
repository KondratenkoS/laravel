<?php

namespace App\Http\Controllers\models;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function show()
    {
        $users = User::all();

        return view('models.users', [
            'users' => $users,
        ]);
    }
}
