<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealers extends Model
{
    use HasFactory;

    /**
     * One to One Relationship.
     * Dealer belongs to Brand.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brands()
    {
        return $this->belongsTo(Brands::class);
    }

    /**
     * Many to Many Relationship.
     * One Dealer belongs to many Brands.
     * You can also use Model object rather than table name. (Example: brands_dealers).
     * You can define foreign pivot key and related pivot key column(s) if you have another name(s).
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function belogsToManyBrands(){
        return $this->belongsToMany(Brands::class, 'brands_dealers', 'brands_id', 'dealers_id');
    }
}
