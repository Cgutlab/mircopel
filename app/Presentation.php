<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    protected $table = 'presentations';
    protected $fillable = [
      'title_es','order','category_id'
    ];

    public function category()
    {
        return $this->belongsToMany('App\Category', 'category_id');
    }

    public function product()
    {
        return $this->belongsToMany('App\Product', 'products_presentations', 'presentation_id', 'product_id');
    }
}
