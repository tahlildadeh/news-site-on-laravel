<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    public function item()
    {
        $items = App\item::orderBy('id', 'desc')
               ->take(1)
               ->get();
               return $items;
    }
}
