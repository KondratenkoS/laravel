<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConditionWhereInController extends Controller
{
    public function show()
    {
        $users_in = DB::table('users')
            ->whereIn('id', [1, 2, 3, 5])
            ->get();

        $users_not_in = DB::table('users')
            ->whereNotIn('id', [1, 2, 3, 5])
            ->get();

        return view('condition_whereIn.condition_whereIn', [
            'users_in' => $users_in,
            'users_not_in' => $users_not_in,
        ]);
    }
}
