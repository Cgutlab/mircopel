<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $table = 'sliders';
  protected $fillable = [
    'section','type','image','order','title_es','subtitle_es'
  ];
}
