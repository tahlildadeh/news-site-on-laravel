<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'cat';


    public function articles()
    {
        return $this->hasMany(Item::class, 'cat_id', 'id');
    }
}
