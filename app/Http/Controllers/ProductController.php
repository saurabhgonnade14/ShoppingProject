<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function store(Request $request){

        $request->validate([
         'name'=>'required',
         'price'=>'required',
         'description'=>'required',
         'image'=>'required',
        ]);

        $product=new Product();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;


        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/', $filename);
            $product->image = $filename;
        }
        $product->save();
        // return redirect()->route('products.create')->with('message','ADDED SUCCESSFULLY ! ');

        return redirect()->route('products.create')->with('msg','Data has been submitted');
    }

    public function  create()
    {

        return view('admin.products.create');
    }
    public function index()
    {
         $product=Product::all();
         return view('admin.products.index',compact('product'));
    }
    public function edit($id)
    {
        $product=Product::find($id);
        return view('admin.products.edit',compact('product'));
        // return redirect()->route('admin.products.edit');
    }
    public function update (Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'image'=>'required',
           ]);

        $product=Product::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;


        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/', $filename);
            $product->image = $filename;
        }
        $product->update();
        // return redirect()->route('products.create')->with('message','ADDED SUCCESSFULLY ! ');
        return redirect()->route('products.index')->with('msg','Data has been updated');

    }
    public function delete($id){

        $product=Product::find($id);
        $product->delete();
        // return redirect()->route('products.index')->with('message','Delete Successfully ! ');
        return redirect()->route('products.index')->with('msg','Data has been deleted');

    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.details',compact('product'));
    }

}
