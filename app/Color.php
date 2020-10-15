<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';
    protected $fillable = [
       'cod', 'title_es'
    ];

    public function product()
    {
        return $this->belongsToMany('App\Product', 'products_colors', 'color_id', 'product_id');
    }
}
