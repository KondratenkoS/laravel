<?php

namespace App\Http\Controllers\components;

use App\Http\Controllers\Controller;
use App\Models\old_models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        echo 'sssss';

        return view('components.index');
    }
}
