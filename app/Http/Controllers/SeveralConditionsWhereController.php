<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeveralConditionsWhereController extends Controller
{
    public function show()
    {
        $users = DB::table('users')
            ->where('age', '>', 5)
            ->where('age', '<', 30)
        ->get();

        return view('several_conditions_where_QB.several_conditions_where_QB', [
            'users' => $users,
        ]);
    }
}
