<?php

namespace App\Http\Controllers\models;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class GettingOneRecordByIdController extends Controller
{
    public function show()
    {
        $user = User::find(3);
        $users = User::find([3, 4, 5]);

        return view('getting_one_record_by_id.getting_one_record_by_id', [
            'user' => $user,
            'users' => $users,
        ]);
    }
}
