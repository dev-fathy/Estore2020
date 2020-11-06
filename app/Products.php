<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'product_name', 'product_image','product_price', 'SKE',
    ];


    public function category() {
        return $this->belongsTo('App\Category');
    }
}
