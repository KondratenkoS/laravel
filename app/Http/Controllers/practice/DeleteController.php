<?php

namespace App\Http\Controllers\practice;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(Request $request)
    {

        User::where('id', '=', $request->id)->delete();

        return view('practice.delete');
    }
}
