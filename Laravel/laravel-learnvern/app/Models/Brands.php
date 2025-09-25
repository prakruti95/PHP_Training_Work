<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    /**
     * One to One Relationship.
     * Brand has one Dealer.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dealers()
    {
        return $this->hasOne(Dealers::class, 'brand_id', 'id');
    }

    /**
     * One to Many Relationship.
     * Brand has many Dealers.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function manyDealers()
    {
        return $this->hasMany(Dealers::class, 'brand_id', 'id');
    }

    /**
     * Many to Many Relationship.
     * One Brand belongs to many Dealers.
     * You can also use Model object rather than table name. (Example: brands_dealers).
     * You can define foreign pivot key and related pivot key column(s) if you have another name(s).
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function belogsToManyDealers(){
        return $this->belongsToMany(Dealers::class, 'brands_dealers');
    }

}
