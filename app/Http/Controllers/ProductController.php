<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Shop;
use App\Product;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        //  return view('backend.product.list',compact('products'));
        return view('backend.product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $brands=Brand::all();
        $shops=Shop::all();
        //$products=Product::alll();

         return view('backend.product.new',compact('categories','brands','shops'));
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
            'name'=>['required','string','max:255','unique:products'],
            'photo'=>'required|mimes:jpeg,bmp,png,jpg',
            'categoryid'=>'required|numeric|min:0|not_in:0'
        ]);
        if ($validator) {
        $name=$request->name;
        $photo=$request->photo;
        $codeno=$request->codeno;
        $price=$request->price;

        $categoryid=$request->categoryid;

        $brandid=$request->brandid;
        $stockqty=$request->stock;
        $expiredate=$request->edate;


          //file upload
        $imageName=time().'.'.$photo->extension();
        $photo->move(public_path('images/product'),$imageName);
        $filepath='images/product/'.$imageName;

        $auth=Auth::user();
        $userid=$auth->id;

        $shopid = $auth->shop->id;

        $status = 'Instock';

        //Data insert 
        $codeno = "JPM-".rand(11111,99999);
        $product= new Product;
        $product->name=$name;
        $product->photo=$filepath;
        $product->codeno = $codeno;
        $product->price = $price;
        $product->category_id=$categoryid;
        $product->save();

        $product->brands()->attach($brandid,['qty'=>$stockqty, 'stockdate'=>$expiredate, 
            'user_id'=>$userid , 'shop_id'=>$shopid,'status'=>$status] );

        return redirect()->route('product.index')->with("successMsg",'New Product is ADDED in your data');
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
        $brands = Brand::all();
        $categories = Category::all();
        $shops=Shop::all();
        $product=Product::find($id);
        return view('backend.product.edit',compact('brands','categories','shops','product'));
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
        $codeno=$request->codeno;
        $price=$request->price;
        $instock=$request->instock;
        $expire_startdate=$request->expire_startdate;
        $expire_enddate=$request->expire_enddate;
        $brandid=$request->brandid;
        $shopid=$request->shopid;
        $categoryid=$request->categoryid;
        $newphoto=$request->photo;
        $oldphoto=$request->oldPhoto;
        if($request->hasFile('photo'))
        {
            $imageName=time().'.'.$newphoto->extension();
            $newphoto->move(public_path('images/category'),$imageName);
            $filepath='images/category/'.$imageName;
            if (\File::exists(public_path($oldphoto))) 
            {
                (\File::delete(public_path($oldphoto)));
            }
        }
        else
        {
            $filepath=$oldphoto;
        }
        //data update
        $codeno = "JPM-".rand(11111,99999);
        $product=Product::find($id);
        $product->name=$name;
        $product->photo=$filepath;
        $product->codeno = $codeno;
        $product->price = $price;
        $product->instock = $instock;
        $product->expire_startdate = $expire_startdate;
        $product->expire_enddate = $expire_enddate;
        $product->brand_id = $brandid;
        $product->shop_id = $shopid;
        $product->category_id=$categoryid;
        $product->save();

        return redirect()->route('product.index')->with('successMsg','Existing 
        Product is UPDATED in your data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $product=Product::find($id);
           $product->delete();
        return redirect()->route('product.index')->with('successMsg','Existing Product is DELETED in your data');
    }
}
