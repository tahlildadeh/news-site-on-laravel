<?php

namespace App\Http\Controllers\Admin;

use App\Cat;
use App\Http\Requests\ItemCreationRequest;
use App\Item;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function __construct()
    {
    }

    protected function appendViewData(array $data=[])
    {
        $data['categories'] = Cat::getList();
        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $messageType=null;
        $message=(session('status-message'));
        if($message){
            $temp = explode('@@@', $message);
            $messageType= $temp[0];
            $message= $temp[1];
        }
        $query = Item::with(['author', 'articleCategory'])->orderBy('id', 'DESC');
        if($request->has('category')){
            $query->where('cat_id', $request->category);
            $selectedCategory = $request->category;
        }else{
            $selectedCategory = null;
        }

        if($request->has('q')){
            $query->where('name', 'LIKE', '%' . $request->q . '%');
            $q = $request->q;
        }else{
            $q = null;
        }

        $articles= $query->paginate(3);
        // dd($articles->toArray());
        return view(
            'admin.news.index',
            $this->appendViewData(compact('articles', 'selectedCategory', 'q', 'messageType', 'message'))
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create', $this->appendViewData([
            'url' => route('admin.news.store'),
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemCreationRequest $request)
    {
        $cat = Cat::findOrFail($request->category);
        $pictureName = null;
        if($request->file('picture') && $request->file('picture')->isValid()){
            $pictureName=$request->file('picture')->hashName();
            $request->file('picture')->move(public_path('static/article'), $pictureName);
        }

        $data = [
            'name' => $request->title,
        ];

        if($pictureName){
            $data['imgNews'] = $pictureName;
        }

        // dd($data);
        $item = new Item($data);
        $item->author()->associate(\Auth::user());
        $item->articleCategory()->associate($cat);
        if($item->save()) {
            $request->session()->flash('status-message', 'success@@@news added successfully (' . $item->name .')');
            return redirect(route('admin.news.index'));
        }

        return back()->withInput()->withErrors(['custom' => 'could not save']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::with(['author', 'articleCategory'])->findOrFail($id);
        $this->authorize($item);
        $url = route('admin.news.update', ['news' => $item->id]);
        return view('admin.news.edit', $this->appendViewData(compact('item', 'url')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemCreationRequest $request, $id)
    {
        $item = Item::findOrFail($id);
        $this->authorize($item);
        dd(__FILE__, __LINE__, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = item::findOrFail($id);
        $this->authorize($item);
        $item->delete();
        return back();
    }
}
