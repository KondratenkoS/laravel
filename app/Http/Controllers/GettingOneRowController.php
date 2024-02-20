<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GettingOneRowController extends Controller
{
    public function show()
    {
        $users = DB::table('users')
            ->where('id', '=', 3)
            ->first();

        return view('getting_one_row.getting_one_row', [
            'users' => $users,
        ]);
    }
}
