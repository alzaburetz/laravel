<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //Каждый айтем принадлежит автору
    function author() {
        $this->belongsTo('App\Author');
    }
}
