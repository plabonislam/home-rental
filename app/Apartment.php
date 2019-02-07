<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
        'city', 'street','bed', 'bath','area','price','property_type','details','author','name','phone','email',
    ];

}
