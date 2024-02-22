<?php

namespace App\Http\Controllers\relationships;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show()
    {
        $users = User::find(5);

        return view('getting_data_one_to_one.getting_data_one_to_one', [
            'users' => $users,
        ]);
    }
}
