<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class User extends Authenticatable
{

    protected $table = 'users';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'user_name',
    ];

    /**
     * Accessor
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /**
     * Mutator
     * @param $value
     */
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = Str::of($value)->lower();
    }

    /**
     * Mutator
     * @param $value
     */
    public function setUserNameAttribute($value)
    {
        $this->attributes['user_name'] = Str::of($value)->trim()->studly();
    }

    /*public function getRouteKeyName()
    {
        return 'last_name';
    }*/

}
