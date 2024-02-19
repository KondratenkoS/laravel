<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConditionWhereController extends Controller
{
    public function show()
    {
//        $users = DB::table('users')->where('age', 30)->get(); // возраст равен 30
//        $users = DB::table('users')->where('age', '!=',30)->get(); // возраст не равен 30
//        $users = DB::table('users')->where('age', '>',30)->get(); // возраст больше 30
//        $users = DB::table('users')->where('age', '<',30)->get(); // возраст меньше 30
        $users = DB::table('users')->where('age', '<=',30)->get(); // возраст меньшим или равным 30

        return view('condition_where_QB.condition_where_QB', [
            'users' => $users,
        ]);
    }
}
