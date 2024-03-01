<?php

namespace App\Http\Controllers\practice;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(Request $request)
    {
        $user = User::find($request->id);
        if(!empty($request->name) or
            !empty($request->email) or
            !empty($request->age) or 
            !empty($request->salary) or
            !empty($request->login) or
            !empty($request->password))
        {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->age = $request->age;
            $user->salary = $request->salary;
            $user->login = $request->login;
            $user->password = $request->password;
            $user->save();
        }

        return view('practice.edit', [
            'users' => User::where('id', '=', $request->id)->get(),
        ]);
    }
}
