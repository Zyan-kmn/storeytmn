<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{


	use SoftDeletes;
    protected $fillable = [
        'id','name','address'
    ];
         public function products(){
    	return $this->hasMany('App\Product');
    }
     public function users(){
    	return $this->hasMany('App\User');
    }
 
}
