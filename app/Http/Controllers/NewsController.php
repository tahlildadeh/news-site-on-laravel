<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    public function show($id, $title=null)
    {
        $article = Item::with(['category'])->find($id);
    

        return view('news.show')->with('article', $article);
    }
}
