<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function show():string
    {
        $users = DB::table('users')->get();

        return view('users_QB.users_QB', [
            'users' => $users
        ]);
    }
}
