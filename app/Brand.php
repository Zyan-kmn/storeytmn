<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Brand extends Model
{
        protected $fillable=[
        	'name','logo','category_id'
        ];


   public function category(){
    	return $this->belongsTo('App\Category');
    }

       public function products(){
        return $this->belongsToMany('App\Product', 'stocks','brand_id','product_id')
        ->withPivot('qty','stockdate','status','user_id','shop_id')
        ->withTimestamps();
    }


}
