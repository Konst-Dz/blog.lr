<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function person()
    {
        return $this->hasOne('App\Person');
    }

    public function country()
    {
        return $this->belongsTo('App\Country','id');
    }

}
