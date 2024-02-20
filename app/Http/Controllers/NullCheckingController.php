<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NullCheckingController extends Controller
{
    public function show()
    {
        $users_name_null = DB::table('users')
            ->whereNull('name')
            ->get();

        $users_name_not_null = DB::table('users')
            ->whereNotNull('name')
            ->get();

        return view('null_checking.null_checking', [
            'users_name_null' => $users_name_null,
            'users_name_not_null' => $users_name_not_null,
        ]);
    }
}
