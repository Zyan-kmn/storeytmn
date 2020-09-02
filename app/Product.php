<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'codeno', 'name', 'photo', 'price', 'category_id'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }
      public function shop(){
        return $this->belongsTo('App\Shop');
    }

    
     public function brands(){
        return $this->belongsToMany('App\Brand', 'stocks','brand_id','product_id')
        ->withPivot('qty','stockdate','status','user_id','shop_id')
        ->withTimestamps();
    }


    public function bills(){
    return $this->belongsToMany('App\Bill', 'billdetails','bill_id','product_id')
        ->withPivot('qty')
        ->withTimestamps();;
    }



   
    }









