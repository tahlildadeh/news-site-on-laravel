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


    public static function getList()
    {
        $categories = self::all();
        $list = [];
        foreach ($categories as $category){
            $list[$category->id] = $category->name;
        }

        // this part is only for display purpose remove it
        /*
        $list = [
            1 => 'sports',
            2 => 'politics',
        ];
        */

        return $list;
    }
}
