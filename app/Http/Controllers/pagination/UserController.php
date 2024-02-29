<?php

namespace App\Http\Controllers\pagination;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        return view('pagination.pagination', [
//            'data' => DB::table('users')->simplePaginate(10),
//            'data' => DB::table('users')->paginate(10),
            'data' => User::paginate(10),
        ]);
    }
}
