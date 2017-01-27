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
date_default_timezone_set('asia/tehran');

$itemsG1 = item::where('published', '1')
    ->where('admin_publish', '1')
        ->where('cat_id', '1')
               ->take(4)
               ->get();

$itemsG2 = item::where('published', '1')
    ->where('admin_publish', '1')
        ->where('cat_id', '2')
               ->take(4)
               ->get();

 $top10 = item::where('published', '1')
          ->where('admin_publish', '1')
          ->take(10)
          ->get();



/*   die(var_dump($items));
*/     
/*   return view('index',compact('itemsG1'));
*/

  return view('index', compact('itemsG1', 'itemsG2', 'top10'));

    }

  public function news($id)
    {


     $items= item::find($id);
    $user_writer_query=$items->userWrite;
         $userw= user::find($user_writer_query);

 var_dump($userw);
 die();
      return view('show',compact('items'));
 }
}
