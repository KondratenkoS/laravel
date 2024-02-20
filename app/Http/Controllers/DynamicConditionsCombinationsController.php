<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DynamicConditionsCombinationsController extends Controller
{
    public function show()
    {
        $users = DB::table('users')
            ->whereIdAndAge(3, 53)
            ->first();

        $id_or_age = DB::table('users')
            ->whereIdOrAge(3, 20)
            ->first();

        return view('dynamic_conditions_combinations.dynamic_conditions_combinations', [
            'users' => $users,
            'id_or_age' => $id_or_age,
        ]);
    }
}
