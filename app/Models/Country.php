<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
//use App\Models\City;

class Country extends Model
{
    use HasFactory;

    public function city(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
