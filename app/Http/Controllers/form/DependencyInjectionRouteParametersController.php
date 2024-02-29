<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DependencyInjectionRouteParametersController extends Controller
{
    public function show(Request $request, $id, $login)
    {
        return view('dependency_injection_route_parameters.form', [
            'id' => $id,
            'request' => $request->except('_token'),
            'login' => $login,
        ]);
    }
}
