<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function viewProducts(){
        $product=Product::all();
        $arr=Array('products'=>$product);
        return view('products.view',$arr);
    }
    public function addProduct(Request $request){
        if($request->isMethod('post')){
            $this->validate($request, [
                'name'=>'required|max:10|unique:products'
            ]);
            $newProduct=new Product();
            $newProduct->name=$request->input('name');
            $newProduct->price=$request->input('price');
            $newProduct->save();

        }
        return view('products.addProduct');
    }
   
    public function deleteProduct($id){
        $product=Product::find($id);
        $product->delete();
        return redirect("/products");
    }
    public function editProduct(Request $request,$id){
        if($request->isMethod('post')){
            $product=Product::find($id);
            $product->name=$request->input('name');
            $product->price=$request->input('price');
            $product->save();
            return redirect("/products");
            
        }else{
       $product=Product::find($id);
       $arr=Array('product'=>$product);
        return view("products.edit",$arr);
        }
    }

}
