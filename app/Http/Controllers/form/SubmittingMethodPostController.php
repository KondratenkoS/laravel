<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubmittingMethodPostController extends Controller
{
    public function result(Request $request)
    {
        return view('submitting_method_post.result', [
            'result' => [
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'salary' => $request->input('salary'),
            ],
        ]);
    }

    public function show()
    {
        return view('submitting_method_post.show');
    }
}
