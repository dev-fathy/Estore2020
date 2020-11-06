<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = ['category_id', 'name'];

    public function product_id()
    {
    	return $this->hasOne('\App\Products','id','product_id');
    }

    public function category_id()
    {
    	return $this->hasMany('\App\Category','id','category_id');
    }
}
