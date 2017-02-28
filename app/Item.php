<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $fillable = [
        'name',
        'imgNews',
        'intro_text',
        'full_text',
        'meta_keyword',
        'meta_descriotion',
    ];

    public $timestamps=false;

    public function item()
    {
        $items = App\item::orderBy('id', 'desc')
               ->take(1)
               ->get();
               return $items;
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'userWrite', 'id');
    }

    public function articleCategory()
    {
        return $this->belongsTo(Cat::class, 'cat_id', 'id');
    }
}
