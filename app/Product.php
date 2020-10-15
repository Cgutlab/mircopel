<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $fillable = [
      'code','title_es','text_es','order','category_id','outstanding', 'keyword_es'
  ];

  public function galleries()
  {
      return $this->hasMany('App\Gallery', 'product_id');
  }

  public function category()
  {
      return $this->belongsTo('App\Category', 'category_id');
  }

  public function color()
  {
      return $this->belongsToMany('App\Color', 'products_colors', 'product_id', 'color_id');
  }

  public function presentation()
  {
      return $this->belongsToMany('App\Presentation', 'products_presentations', 'product_id', 'presentation_id');
  }

  public function grammage()
  {
      return $this->belongsToMany('App\Grammage', 'products_grammages', 'product_id', 'grammage_id');
  }

  public function size()
  {
      return $this->belongsToMany('App\Size', 'products_sizes', 'product_id', 'size_id');
  }
}
