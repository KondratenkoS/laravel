<?php

namespace App\Http\Controllers\relationships;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class InverseOneToOneController extends Controller
{
    public function show()
    {
        $profile = Profile::find(1);
        $profiles = Profile::all();

        return view('inverse_one_to_one.inverse_one_to_one', [
            'profile' => $profile,
            'profiles' => $profiles,
        ]);
    }
}
