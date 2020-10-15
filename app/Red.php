<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Red extends Model
{
    protected $table = 'reds';
    protected $fillable = [
        'icon','image','order','section','route'
    ];
}
