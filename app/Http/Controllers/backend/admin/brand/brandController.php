<?php

namespace App\Http\Controllers\backend\admin\brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class brandController extends Controller
{
    
       
//brand 
public function brand(){

    $brands = Brand::latest()-> paginate(20);
 
    return view('backend.brand.index', compact('brands'));
 
     }
 
 //Create brand 
  public function create_brand(){
      
     return view('backend.brand.new');
  }
 
  //Store brand 
 
  public function store_brand(Request $request){
 
     $validator = Validator::make($request->all(), [
        'image'       => 'required| image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        'name'                => 'required|min:2',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 

     $image_file = $request->file('image');

   if($image_file){

    $img_gen = hexdec(uniqid());
    $image_url = 'brand/brand_img/';
    $image_ext = strtolower($image_file->getClientOriginalExtension());


    $img_name = $img_gen.'.'.$image_ext;
    $final_name1 = $image_url.$img_gen.'.'.$image_ext;

    $image_file->move($image_url, $img_name);

   }


 
   Brand::create([

            'banner'             => $final_name1,
            'name'              => $request->name,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }
 
  //Goto Edit page brand 
  public function edit_brand($id){
 
 
     $brand = Brand::find($id);
 
 
     return view('backend.brand.edit', compact('brand'));
     
  }
 
  //Update Slider brand 
  public function update_brand(Request $request, $id){
 
 $management = Brand::find($id);

    $validator = Validator::make($request->all(), [

        'name'                => 'required|min:2',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 

     $image_file = $request->file('image');

   if($image_file){

    if($management->image){
           
      unlink($management->image);
  
  }

    $img_gen = hexdec(uniqid());
    $image_url = 'brand/brand_img/';
    $image_ext = strtolower($image_file->getClientOriginalExtension());


    $img_name = $img_gen.'.'.$image_ext;
    $final_name1 = $image_url.$img_gen.'.'.$image_ext;

    $image_file->move($image_url, $img_name);

    $management->banner = $final_name1;
    $management->save();

   }
 


 
   $management->update([

    'name'              => $request->name,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider brand 
  public function delete_brand($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = Brand::find($id);
      if($slider_img->image){
               
        unlink($slider_img->image);
    
    }
  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }
}
