<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\item;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

$itemsG1 = item::where('published', '1')
    ->where('admin_publish', '1')
        ->where('cat_id', '1')
        ->orderBy('id', 'DESC')
               ->take(4)
               ->get();


$itemsG2 = item::where('published', '1')
    ->where('admin_publish', '1')
        ->where('cat_id', '2')
        ->orderBy('id', 'DESC')
               ->take(4)
               ->get();


 $itemsG3 = item::where('published', '1')
    ->where('admin_publish', '1')
        ->where('cat_id', '3')
        ->orderBy('id', 'DESC')
               ->take(4)
               ->get();


 $top10 = item::where('published', '1')
          ->where('admin_publish', '1')
          ->orderBy('id', 'DESC')
          ->take(10)
          ->get();

  $randnews = item::where('published', '1')
          ->where('admin_publish', '1')
          ->inRandomOrder()
          ->take(10)
          ->get();

/*dd($itemsG1);*/


 
/*   die(var_dump($randnews)); 
*/

  return view('index', compact('itemsG1', 'itemsG2', 'itemsG3', 'top10' , 'randnews'));

    }

  public function news($id)
    {


     $items= item::find($id);
   
 
      return view('show',compact('items'));
 }
}
