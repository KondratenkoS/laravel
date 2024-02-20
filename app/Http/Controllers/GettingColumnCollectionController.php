<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GettingColumnCollectionController extends Controller
{
    public function show()
    {
        $users = DB::table('users')
            ->pluck('name');

        return view('getting_column_collection.getting_column_collection', [
            'users' => $users,
        ]);
    }
}
