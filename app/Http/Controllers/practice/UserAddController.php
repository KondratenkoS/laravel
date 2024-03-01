<?php

namespace App\Http\Controllers\practice;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserAddController extends Controller
{
    public function show_form(Request $request){
            $user = new User();
            if(!empty($request->name) and
                !empty($request->email) and
                !empty($request->age) and
                !empty($request->salary) and
                !empty($request->login) and
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

        return view('practice.add_user', [

        ]);
    }
}
