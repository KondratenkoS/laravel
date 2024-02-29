<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GettingPartDataController extends Controller
{
    public function form(Request $request)
    {
        return view('getting_part_data.form', [
            'data' => $request->only(['name', 'login']),
        ]);
    }
}
