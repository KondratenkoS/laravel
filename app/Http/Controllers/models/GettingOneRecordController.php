<?php

namespace App\Http\Controllers\models;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class GettingOneRecordController extends Controller
{
    public function show()
    {
        $users = User::where('age', 30)->get();

        return view('getting_one_record.getting_one_record', [
            'users' => $users
        ]);
    }
}
