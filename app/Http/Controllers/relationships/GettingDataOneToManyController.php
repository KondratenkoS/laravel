<?php

namespace App\Http\Controllers\relationships;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class GettingDataOneToManyController extends Controller
{
    public function show()
    {
        $countries_and_cities = Country::all();

        return view('getting_data_one_to_many.getting_data_one_to_many', [
            'countries_and_cities' => $countries_and_cities,
        ]);
    }
}
