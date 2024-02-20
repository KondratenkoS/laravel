<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GettingColumnValueController extends Controller
{
    public function show()
    {
        $users = DB::table('users')
            ->where('id', '=', 1)
            ->value('email');

        return view('getting_column_value.getting_column_value', [
            'users' => $users,
        ]);
    }
}
