<?php


namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model{

    //public $timestamps = false;
    const CREATED_AT = 'date';
    //protected $fillable = ['title'];
    //protected $guarded = [];
    use SoftDeletes;

}
