<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function city()
    {
       return $this->belongsTo('App\City','id');
    }
}
