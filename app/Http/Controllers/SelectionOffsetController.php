<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectionOffsetController extends Controller
{
    public function show()
    {
        $users = DB::table('users')
            ->where('age', '=', 30)
            ->skip(2)
            ->take(10)
        ->get();

        return view('selection_offset.selection_offset', [
            'users' => $users,
        ]);
    }
}
