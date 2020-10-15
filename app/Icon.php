<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
  protected $table = 'icons';
  protected $fillable = [
      'section','image','title_es','order'
  ];
}
