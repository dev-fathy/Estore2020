<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['product_id', 'name'];

    public function product_id()
    {
    	return $this->hasOne('\App\Products','id','product_id');
    }

    public function brands()
    {
    	return $this->hasMany('\App\Brand','category_id','id');
    }
}
