<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SortingByDateController extends Controller
{
    public function show()
    {
        $users = DB::table('users')
            ->oldest()
            ->get();

        $users2 = DB::table('users')
            ->latest()
            ->get();

        $users3 = DB::table('users')
            ->where('age', '>', 30)
            ->oldest()
            ->get();

        return view('sorting_by_date.sorting_by_date', [
            'users' => $users,
            'users2' => $users2,
            'users3' => $users3,
        ]);
    }
}
