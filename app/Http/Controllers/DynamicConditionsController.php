<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DynamicConditionsController extends Controller
{
    public function show()
    {
        $users_id = DB::table('users')
            ->whereId(1)
            ->get();

        $users_name = DB::table('users')
            ->whereName('John')
            ->get();

        $users_email = DB::table('users')
            ->whereEmail('john@mail.com')
            ->get();
        return view('dynamic_conditions.dynamic_conditions', [
            'users_id' => $users_id,
            'users_name' => $users_name,
            'users_email' => $users_email,
        ]);
    }
}
