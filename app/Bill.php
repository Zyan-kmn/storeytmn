<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model
{
       protected $fillable=[
    	'billdate','voucherno','total','status'];


        public function users(){
    	return $this->belongsTo('App\User');
    }
        public function products(){
    	return $this->belongsToMany('App\Product','billdetails','bill_id','product_id')
    	->withPivot('qty')
    	->withTimestamps();;
    }
}
