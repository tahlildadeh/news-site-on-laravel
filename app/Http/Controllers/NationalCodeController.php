<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nationalCode;
use App\Http\Requests;
use Validator ;
class NationalCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url=route('nationalcode.create');
        return view('national',compact('url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'national_code'=>'required|unique:national_codes|numeric|digits:10',
        ]) ;
        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }
        if($validator->passes()){
            nationalCode::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'national_code' => $request->input('national_code'),
                'gender' => $request->input('gender'),

            ]);
        }
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
        $nationalCode=nationalCode::find($id);
        $url=route('nationalcode.update',['nationalcode'=>$nationalCode->id]);
        return view('edit',compact('nationalCode','url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        nationalCode::where('id',$id)->update([
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('first_name'),
            'national_code'=>$request->input('national_code'),
            'gender'=>$request->input('gender')
        ]);
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
