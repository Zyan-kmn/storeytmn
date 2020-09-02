<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops=Shop::all();
        return view('backend.shop.list',compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.shop.new');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $validator=$request->validate([
            'name'=>['required','string','max:255'],
            'address'=>'required'
        ]);
        if ($validator) {
        $name=$request->name;
        $address=$request->address;


        //Data insert 
        $shop= new Shop;
        $shop->name=$name;
        $shop->address=$address;
        $shop->save();
        return redirect()->route('shop.index')->with("successMsg",'New Shop is ADDED in your data');
        }
        else
        {
            return redirect::back()->withErrors($validator);
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
        $shop=Shop::find($id);
         //dd($category);
         return view('backend.shop.edit',compact('shop'));
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
        $name=$request->name;
        $address=$request->address;

            //data update
        $shop=Shop::find($id);
        $shop->name=$name;
        $shop->address=$address;
        $shop->save();
        return redirect()->route('shop.index')->with('successMsg','Existing Shop is UPDATED in your data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $shop=Shop::find($id);
           $shop->delete();
        return redirect()->route('shop.index')->with('successMsg','Existing Shop is DELETED in your data');

    }
}
