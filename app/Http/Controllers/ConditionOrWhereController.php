<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConditionOrWhereController extends Controller
{
    public function show()
    {
//      $users = DB::table('users')
//          ->where('age', 30)
//          ->orWhere('id', '>', 4)
//          ->orWhere('salary', '>', 500)
//          ->get();

        $users = DB::table('users')
            ->where('salary', '=', 500)
            ->orWhere(function ($query) {
                $query
                ->where('age', '>', 20)
                ->where('age', '<', 30);
            })
        ->get();

        return  view('condition_orWhere.condition_orWhere', [
            'users' => $users,
        ]);
    }
}
