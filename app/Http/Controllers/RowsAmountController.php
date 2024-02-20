<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RowsAmountController extends Controller
{
    public function show()
    {
        $users = DB::table('users')
            ->take(3)
            ->where('age', '=', 30)
        ->get();

        return view('rows_amount.rows_amount', [
            'users' => $users,
        ]);
    }
}
