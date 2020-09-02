<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $fillable=[
    	'name','photo'
    ];

   public function brand(){
    	return $this->hasMany('App\Brand');
    }
            public function products(){
    	return $this->hasMany('App\Product');
    }
}
