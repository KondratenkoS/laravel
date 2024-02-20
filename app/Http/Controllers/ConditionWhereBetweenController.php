<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConditionWhereBetweenController extends Controller
{
    public  function show()
    {
        $users_between = DB::table('users')
            ->whereBetween('age', [20, 50])
            ->get();

        $users_not_between = DB::table('users')
            ->whereNotBetween('age', [20, 50])
            ->get();

        return view('condition_whereBetween.condition_whereBetween', [
            'users_between' => $users_between,
            'users_not_between' => $users_not_between,
        ]);
    }
}
