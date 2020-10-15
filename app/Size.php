<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    protected $fillable = [
      'title_es','order','category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function product()
    {
        return $this->belongsToMany('App\Product', 'products_sizes', 'size_id', 'product_id');
    }
}
