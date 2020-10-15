<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    protected $fillable = [
      'section','type','order','image1','image2','image3','title_es','text_es',
    ];
}
