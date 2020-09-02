<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
         //dd($categories);
        // return view('backend.brand.list',compact('categories'));
        //return view('brand.new',compact('categories'));
       //return view('backend.brand.new');
        //$categories=Category::all();
         //dd($categories);

       // $brands=Brand::where();//database ka category all koe swal htcok chin
       // // dd($categories);
         return view('backend.brand.list',compact('brands'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories=Category::all();
         //dd($categories);
         return view('backend.brand.new',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
          $validator=$request->validate([
            'name'=>['required','string','max:255','unique:categories'],
            'logo'=>'required|mimes:jpeg,bmp,png,jpg',
            'categoryid'=>'required|numeric|min:0|not_in:0'
        ]);
                if ($validator) {
        $name=$request->name;
        $logo=$request->logo;
        $categoryid=$request->categoryid;

          //file upload
        $logoName=time().'.'.$logo->extension();
        $logo->move(public_path('logo/brand'),$logoName);
        $filepath='logo/brand/'.$logoName;

        //Data insert 
        $brand= new Brand;
        $brand->name=$name;
        $brand->logo=$filepath;
        $brand->category_id=$categoryid;
        $brand->save();
        return redirect()->route('brand.index')->with("successMsg",'New Brand is ADDED in your data');
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
        $brand = Brand::find($id);
        $categories = Category::all();
        return view('backend.brand.edit',compact('brand','categories'));
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
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'photo' => 'sometimes|mimes:jpeg,bmp,png,jpg'

        ]);

        if($validator)
        {
            $name = $request->name;
            $newlogo = $request->photo;
            $oldlogo = $request->oldLogo;
            $categoryid = $request->categoryid;

            // File Upoload
            if ($request->hasFile('logo')) {
                $logoName = time().'.'.$newlogo->extension();  
           
                $newlogo->move(public_path('logo/brand'), $logoName);

                $filepath = 'logo/brand/'.$logoName;

                if(\File::exists(public_path($oldlogo))){
                    \File::delete(public_path($oldlogo));
                }

            }else{
                
                $filepath = $oldlogo;

            }

            // Data insert
            $brand = Brand::find($id);
            $brand->name = $name;
            $brand->logo = $filepath;
            $brand->category_id = $categoryid;

            $brand->save();

            // Return 
            return redirect()->route('brand.index')->with("successMsg", "New Brand is UPDATED in your data");
        }
        else
        {
            return Redirect::back()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand=Brand::find($id);
         $brand->delete();
        return redirect()->route('brand.index')->with('successMsg','Existing Brand is DELETED in your data');
    }
}
