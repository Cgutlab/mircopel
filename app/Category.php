<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
      'code', 'image', 'title_es', 'order',
    ];

    public function products()
    {
        return $this->hasMany('App\Product', 'category_id');
    }

    public function presentations()
    {
        return $this->hasMany('App\Presentation', 'presentation_id');
    }

    public function grammages()
    {
        return $this->hasMany('App\Grammage', 'grammage_id');
    }

    public function sizes()
    {
        return $this->hasMany('App\Size', 'size_id');
    }
}
