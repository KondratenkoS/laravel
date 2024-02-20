<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataSortingController extends Controller
{
    public function show()
    {
        $users = DB::table('users')
            ->orderBy('age')
            ->get();

        $user_desc = DB::table('users')
            ->orderBy('age', 'desc')
            ->get();

        return view('data_sorting.data_sorting', [
            'users' => $users,
            'user_desc' => $user_desc,
        ]);
    }
}
