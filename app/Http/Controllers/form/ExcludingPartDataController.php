<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExcludingPartDataController extends Controller
{
    public function exclude(Request $request)
    {
        return view('excluding_part_data.form', [
            'exclude' => $request->except(['password', 'email', '_token']),
        ]);
    }
}
