<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestAllController extends Controller
{
    public function form(Request $request)
    {
        return view('request_all.form', [
            'all' => $request->all(),
        ]);
    }
}
