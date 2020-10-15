<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grammage extends Model
{
  protected $table = 'grammages';
  protected $fillable = [
      'title_es','order','category_id'
  ];

  public function category()
  {
      return $this->belongsTo('App\Category', 'category_id');
  }

  public function product()
  {
      return $this->belongsToMany('App\Product', 'products_grammages', 'grammage_id', 'product_id');
  }
}
