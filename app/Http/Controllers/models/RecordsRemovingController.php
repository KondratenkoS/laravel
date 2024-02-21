<?php

namespace App\Http\Controllers\models;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RecordsRemovingController extends Controller
{
    public function remove_user():void
    {
        $users = User::where('age', '=', 30)->delete();
    }
}
