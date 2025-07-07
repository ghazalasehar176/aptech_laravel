<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function ViewCreate(){
        return view("create");
    }

    public function StoreData(Request $request){
       $validation = $request->validate([
        "name" => "string|required|max:100",
        "price" => "integer|required",
        "stock" => "integer|required",
        "description" => "string"
       ]);

       $products =  Product::create($request->all());


       if($products){
         return redirect(route('create'))->with("message" , "Product Created Successfully");
       }
    }


    function listView(){
  
      $product = product::all(); // ye list of products hai

      return view('list' , compact('product'));
    }
    

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();

        return redirect(route('allData'))->with("message" , "Product deleted successfully");
    }


    public function edit($id){
      $product = Product::find($id);
      return view ('update' , compact('product'));
    }
    
    public function update(Request $request ,$id){
      $product = Product::find($id);
      $product->update($request->all());

      return redirect()->route("allData")->with("message", "product edited successfully");

    }


    public function trash(){
      $product = Product::onlyTrashed()->get();
      return view('trash' , compact('product'));
    }


    public function permanentDelete($id){
  $product = Product::withTrashed()->find($id);
 
  if($product){
    $product->forceDelete();
    return redirect()->route("trash")->with("message", "product permanent deleted successfully");
  }
    }


    
    public function restore($id){
    $product = Product::withTrashed()->find($id);
 
  if($product){
    $product->restore();
    return redirect()->route("allData")->with("message", "product restore successfully");
  }
    }
   
}