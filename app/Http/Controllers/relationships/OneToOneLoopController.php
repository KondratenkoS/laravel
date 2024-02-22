<?php

namespace App\Http\Controllers\relationships;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class OneToOneLoopController extends Controller
{
    public function show()
    {
        $users = User::all();

        return view('one_to_one_loop.one_to_one_loop', [
            'users' => $users,
        ]);
    }
}
