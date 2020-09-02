<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Bill;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;



class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allproducts=Product::all();
        return view('backend.sale.list',compact('allproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
    public function sale($id)

    {
       // echo $id;
        $products=Product::where('category_id','=',$id)->get();
        //dd($products);
        return $products;
        
              }
    public function search(Request $request){
        // dd($request->product);
        $keyword=$request->product;

        $searchitemm=Product::Where('codeno','=',$keyword)->first();
        //dd($searchitemm);
    return $searchitemm;
    }

    public function bill(Request $request){
        //dd($request->vcNum);
        $carts=json_decode($request->data);
        

        $billdate=Carbon::now();
        $voucherno=$request->vcNum;
        $total=0;
        foreach($carts as $row){
        $price=$row->price;
            
        $status='Bill';
        $auth=Auth::user();
        $userid=$auth->id;

        $bill=new Bill;
        $auth=Auth::user();
        $userid=$auth->id;
        $bill->billdate=$billdate;
        $bill->voucherno=$voucherno;
        $bill->total=$total;
       
        $bill->status=$status;
        $bill->user_id=$userid;
        $bill->save();

        foreach($carts as $value)
        {
            $productid=$value->id;
            $qty=$value->qty;
            $bill->products()->attach($productid,['qty'=>$qty]);
        }
        return response()->json([
            'status'=>'Order Successfully created'
        ]);
    }
}
public function list()
    {
        return view('backend.sale.list');
    }







}
