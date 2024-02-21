<?php

namespace App\Http\Controllers\models;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ModelsQueryBuilderController extends Controller
{
    public function show()
    {
        $users_age = User::where('age', '=', 30)->get();
        $users_salary = User::whereBetween('salary', [1000, 3000])->get();
        $users_skip = User::all()->skip(3);
        $users_skip_take = User::all()->skip(3)->take(5);
        $users_by_id = User::whereIn('id', [1, 2, 3, 5])->get();

        return view('models_query_builder.models_query_builder', [
            'users_age' => $users_age,
            'users_salary' => $users_salary,
            'users_skip' => $users_skip,
            'users_skip_take' => $users_skip_take,
            'users_by_id' => $users_by_id
        ]);
    }
}
