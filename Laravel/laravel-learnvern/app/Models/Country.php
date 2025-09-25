<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';

    /**
     * Has One Through Relationship.
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function cities()
    {
        // "countries.id = states.county_id"
        // "states.id = cities.state_id"
        return $this->hasOneThrough(
            City::class,
            State::class,
            'country_id', // Foreign key on the states table
            'state_id', // Foreign key on the cities table
            'id', // Local key on the countries table
            'id' // Local key on the states table...
        );
    }

    /**
     * Has Many Through Relationship.
     * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
     */
    public function multipleCities()
    {
        // "countries.id = states.county_id"
        // "states.id = cities.state_id"
        return $this->hasManyThrough(
            City::class,
            State::class,
            'country_id', // Foreign key on the states table
            'state_id', // Foreign key on the cities table
            'id', // Local key on the countries table
            'id' // Local key on the states table...
        )->take(30);
    }
}
