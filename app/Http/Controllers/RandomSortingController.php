<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RandomSortingController extends Controller
{
    public function show()
    {
        $users_rand = DB::table('users')
            ->inRandomOrder()
        ->get();

        $user_rand = DB::table('users')
            ->inRandomOrder()
            ->first();

        $users_rand_age = DB::table('users')
            ->whereBetween('age', [20, 50])
            ->inRandomOrder()
            ->get();

        $user_rand_age = DB::table('users')
            ->whereBetween('age', [20, 50])
            ->inRandomOrder()
            ->first();

        return view('random_sorting.random_sorting', [
            'users_rand' => $users_rand,
            'user_rand' => $user_rand,
            'users_rand_age' => $users_rand_age,
            'user_rand_age' => $user_rand_age,
        ]);
    }
}
