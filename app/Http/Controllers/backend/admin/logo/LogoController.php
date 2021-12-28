<?php

namespace App\Http\Controllers\backend\admin\logo;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LogoController extends Controller
{
       
//logo 
public function logo(){

    $logos = Logo::latest()-> paginate(20);
 
    return view('backend.logo.index', compact('logos'));
 
     }
 
 //Create logo 
  public function create_logo(){
      
     return view('backend.logo.new');
  }
 
  //Store logo 
 
  public function store_logo(Request $request){
 
     $validator = Validator::make($request->all(), [
        'image'       => 'required| image|mimes:jpeg,png,jpg,gif,svg|max:5000',
      
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 

     $image_file = $request->file('image');

   if($image_file){

    $img_gen = hexdec(uniqid());
    $image_url = 'logo/logo_img/';
    $image_ext = strtolower($image_file->getClientOriginalExtension());


    $img_name = $img_gen.'.'.$image_ext;
    $final_name1 = $image_url.$img_gen.'.'.$image_ext;

    $image_file->move($image_url, $img_name);

   }


 
   Logo::create([

            'image'             => $final_name1,
           
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }



 
  //Goto Edit page logo 
  public function edit_logo($id){
 
 
     $logo = Logo::find($id);
 
 
     return view('backend.logo.edit', compact('logo'));
     
  }
 
  //Update  logo 
  public function update_logo(Request $request, $id){
 
 $management = Logo::find($id);


 
     $image_file = $request->file('image');

   if($image_file){

    if($management->image){
           
      unlink($management->image);
  
  }

    $img_gen = hexdec(uniqid());
    $image_url = 'logo/logo_img/';
    $image_ext = strtolower($image_file->getClientOriginalExtension());


    $img_name = $img_gen.'.'.$image_ext;
    $final_name1 = $image_url.$img_gen.'.'.$image_ext;

    $image_file->move($image_url, $img_name);

    $management->image = $final_name1;
    $management->save();

    $this->successMessage('Updated success');
    return redirect()->back();

   }else{
       
    $this->errorMessage('Please select a valid image.');
    return redirect()->back();
   }
 

  


 
     
 
 
  }
  //Delete Slider logo 
  public function delete_logo($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = Logo::find($id);
      if($slider_img->image){
               
        unlink($slider_img->image);
    
    }
  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }
}
