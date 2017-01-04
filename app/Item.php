<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';


    public function category()
    {
        return $this->belongsTo(Cat::class, 'cat_id', 'id');
    }
}
