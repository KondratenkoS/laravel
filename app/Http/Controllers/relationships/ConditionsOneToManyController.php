<?php

namespace App\Http\Controllers\relationships;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\City;
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
}
