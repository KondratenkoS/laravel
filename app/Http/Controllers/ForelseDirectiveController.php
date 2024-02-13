<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForelseDirectiveController extends Controller
{
    public function show(): string
    {
        return view('forelse_directive.forelse_directive', [
            'arr' => [
//                'name1' => 'Hell',
//                'name2' => 'Erindi',
//                'name3' => 'Undead',
            ]
        ]);
    }
}
