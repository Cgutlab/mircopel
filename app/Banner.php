<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';
    protected $fillable = [
      'section', 'type', 'order', 'image', 'title_es', 'subtitle_es', 'button_es', 'route'
    ];
}
