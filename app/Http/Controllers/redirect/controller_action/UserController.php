<?php

namespace App\Http\Controllers\redirect\controller_action;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all_users(Request $request)
    {
        $users = User::paginate(10);

        return view('redirects.all_users', [
            'users' => $users
        ]);
    }

    public function add_user(Request $request)
    {
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

            return redirect()->action([UserController::class, 'all_users']);
        }



        return view('redirects.add_user');
    }
}
