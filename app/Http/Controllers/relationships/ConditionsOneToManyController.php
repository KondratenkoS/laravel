<?php

namespace App\Http\Controllers\relationships;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;

class ConditionsOneToManyController extends Controller
{
    public function show()
    {
        $countries = Country::find(1)
            ->city()
            ->where('population', '>', 500000)
            ->get();

        return view('conditions_one_to_many.conditions_one_to_many', [
            'countries' => $countries,
        ]);
    }

    public function create():void
    {
        User::create([
            'login' => 'HellS',
            'password' => '1234',
            'name' => 'SergO',
            'email' => 'email@gmail.com',
            'age' => '34',
            'salary' => '3500',
        ]);

        dd('created');
    }
}
