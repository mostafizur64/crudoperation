<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Intervention\Image\Facades\Image;

class CurdController extends Controller


{
    public function store(Request $request ){

       


$product_id=Crud::insertGetId([
    'product_name'=>$request->product_name,
    'product_description'=>$request->product_description,
    'product_price'=>$request->product_price,
    'product_size'=>$request->product_size,
]);

if($request->hasFile('product_photo')){
    $uploaded_photo=$request->file('product_photo');
   $new_photo_name=$product_id.'.'.$uploaded_photo->getClientOriginalExtension();
    $new_photo_location='public/uploads/product_photo/'.$new_photo_name;
      Image::make($uploaded_photo)->resize(600, 622)->save(base_path($new_photo_location));
      Crud::find($product_id)->update([
          'product_photo' => $new_photo_name,
      ]);
  
    }

    
    
      return back();
}

 public function delete($id){
     Crud::find($id)->delete();
     return back();
 
    }
    public function Edit($id){
        $products=Crud::findOrFail($id);
        return view('editproduct',compact('products'));
    }


 public function Update (Request $request){


    $product=Crud::findOrFail($request->product_id);
    $product->product_name=$request->product_name;
    $product->product_description=$request->product_description;
    $product->product_price=$request->product_price;
    $product->product_size=$request->product_size;
     $product->save();
     return back();
 }



 }