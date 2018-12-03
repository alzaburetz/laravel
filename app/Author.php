<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //Автор может иметь несколько айтемов
    function items() {
        $this->hasMany('App\Item');
    }
}
