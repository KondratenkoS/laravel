<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectionFieldsController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->select('name', 'email as user_email')->get();

        return view('selection_fields_QB.selection_fields_QB', [
            'users' => $users,
        ]);
    }
}
