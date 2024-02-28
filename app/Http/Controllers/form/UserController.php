<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show_form()
    {
        return view('object_request.object_request');
    }

    public function result(Request $request)
    {
        return view('object_request.object_request', [
            'sum' => array_sum($request->input()),
        ]);
    }
}
