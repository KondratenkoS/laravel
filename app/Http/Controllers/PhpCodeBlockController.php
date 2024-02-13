<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpCodeBlockController extends Controller
{
    public function show():string
    {
        return view('php_code_block.php_code_block', [
            'arr' => 'Hello world!'
        ]);
    }
}
