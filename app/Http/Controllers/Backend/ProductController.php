<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Add product
    public function index(){
        return view("Backend.addproduct");
    }
    //Add product
    public function insert (Request $request){

        $request->validate([
            'pro_name' => 'required',
            'pro_des' => 'required',
            'pro_qty' => 'required',
            'pro_status' => 'required',
        ]);

        $product = new Product();
        $product->p_name = $request->pro_name;
        $product->p_des = $request->pro_des;
        $product->p_qty= $request->pro_qty;
        $product->p_price = $request->pro_price;
        $product->p_status = $request->pro_status;
        $product->save();
        // return back();
        return redirect()->route('Backend.manageProduct');
    }
    
    //Manage product
    public function manageP(){
        $products = Product::all();
        return view("Backend.manageproduct", compact("products"));
    }
    //Active to Inactive status
    public function activeP($id){
        $product = Product::find($id);
        $product->p_status = '0';
        $product->update();
        return back();
    }
    //Inactive to Active status
    public function inactiveP($id){
        $product = Product::find($id);  
        $product->p_status = '1';
        $product->update();
        return back();        
    }
    //Delete product
    public function deleteP($id){
        $product = Product::find($id);
        $product->delete();
        return back();        
    }

    //Edit product
    public function editP ($id){
        $products = Product::find($id);
        return view("Backend.editproduct", compact("products"));
    }

    //Updare product
    public function updateP (Request $request, $id){

        $request->validate([
            'pro_name' => 'required',
            'pro_price' => 'required',
            'pro_status' => 'required',
        ]);

        $product = Product::find($id);
        $product->p_name = $request->pro_name;
        $product->p_des = $request->pro_des;
        $product->p_qty= $request->pro_qty;
        $product->p_price = $request->pro_price;
        $product->p_status = $request->pro_status;
        $product->save();
        // return back();
        return redirect()->route('Backend.manageProduct');
    }
}
