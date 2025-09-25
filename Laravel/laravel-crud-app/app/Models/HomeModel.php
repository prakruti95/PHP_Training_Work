<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class HomeModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        "photo","name","weight","price","qty","descriptions"
    ];

    protected $table="products";
}
