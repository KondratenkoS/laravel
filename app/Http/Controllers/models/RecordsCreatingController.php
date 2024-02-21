<?php

namespace App\Http\Controllers\models;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RecordsCreatingController extends Controller
{
    public function show()
    {
        $user = new User();
        $user->name = 'Hell';
        $user->age = 34;
        $user->email = '';
        $user->salary = 3500;
        $user->save();

        return view('records_creating.records_creating', [

        ]);
    }
}
