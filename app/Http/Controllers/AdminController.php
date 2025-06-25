<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function add_product(){
        return view('Admin.add_product');
    }

//  add product work....
    public function product(Request $req)
    {
         $product = new Product();
        $product->Product_Name = $req->name;
        $product->Product_price = $req->price;
        $product->Product_description = $req->desc;
        $product->product_code = 'PROD'. '-' . rand(1000000000000000, 9999999999999999);
       
         
        // image upload
        $image = $req->file('Product_image');

        if ($image) {
            $imagename = time(). '.' .$image->getClientOriginalExtension();
            $image->move('productimages', $imagename);
            $product->Product_image = $imagename;
        }
        
         $product->Tracking_id = rand(100000 , 999999);
         $product->save();
        return redirect()->back();
    }


    // show record
    public function all_product()
    {
        $product = Product::all();
        return view('Admin.all_product',compact('product'));
    }


    




    //   delete work
 public function delete_product($id)
 {
   $author = Product::find($id)->delete();
   return redirect()->back();
 }

     // edit work
     public function edit_product($id)
     {
       $product = Product::find($id);
       return view('Admin.edit_product',compact('product'));
     }
 
 
 
//   update work
     public function update_product(Request $req, $id)
     {
         $product = Product::find($id);
     
        //  image upload
         if ($req->hasFile('image')) {
             $image = $req->file('image');
             $imagename = time().'.'.$image->getClientOriginalExtension();
             $image->move(public_path('productimages'), $imagename);
             $product->Product_image = $imagename; 
         }
         $product->Product_Name = $req->name;
         $product->Product_price = $req->price;
         $product->Product_description = $req->desc;
     
         $product->save();
        return redirect('/all_product');
     }





}
