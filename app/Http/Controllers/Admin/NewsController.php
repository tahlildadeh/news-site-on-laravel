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
    public function index()
    {
        //die(trans('validation.accepted', ['attribute' => 'salam']));
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
        dd($request->all());
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
        $item = /**Item::findOrFail($id); //*/json_decode(json_encode(['id' => $id, 'title' =>'dfgkjdkfgj dfgkjdfkjgd', 'category' => 2]));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
