<?php

namespace App\Http\Controllers\models;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RecordsChangingController extends Controller
{
    public function change_model()
    {
        $users = User::find(31);
        $users->email = 'hell@gmail.com';
        $users->save();
    }
}
