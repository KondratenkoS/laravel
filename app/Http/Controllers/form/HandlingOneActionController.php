<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HandlingOneActionController extends Controller
{
    public function form(Request $request)
    {
        return view('handling_one_action.form', [
            'city' => $request->input('city'),
            'country' => $request->input('country'),
        ]);
    }
}
