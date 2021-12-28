<?php

namespace App\Http\Controllers\backend\admin\favicon;

use App\Http\Controllers\Controller;
use App\Models\Favicon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FaviconController extends Controller
{
    //favicon 
public function favicon(){

    $favicons = Favicon::latest()-> paginate(20);
 
    return view('backend.favicon.index', compact('favicons'));
 
     }
 
 //Create favicon 
  public function create_favicon(){
      
     return view('backend.favicon.new');
  }
 
  //Store favicon 
 
  public function store_favicon(Request $request){
 
     $validator = Validator::make($request->all(), [
        'image'       => 'required| image|mimes:jpeg,png,jpg,gif,svg|max:5000',
      
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 

     $image_file = $request->file('image');

   if($image_file){

    $img_gen = hexdec(uniqid());
    $image_url = 'favicon/favicon_img/';
    $image_ext = strtolower($image_file->getClientOriginalExtension());


    $img_name = $img_gen.'.'.$image_ext;
    $final_name1 = $image_url.$img_gen.'.'.$image_ext;

    $image_file->move($image_url, $img_name);

   }


 
   Favicon::create([

            'image'             => $final_name1,
           
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }



 
  //Goto Edit page favicon 
  public function edit_favicon($id){
 
 
     $favicon = Favicon::find($id);
 
 
     return view('backend.favicon.edit', compact('favicon'));
     
  }
 
  //Update  favicon 
  public function update_favicon(Request $request, $id){
 
 $management = Favicon::find($id);


 
     $image_file = $request->file('image');

   if($image_file){

    if($management->image){
           
      unlink($management->image);
  
  }

    $img_gen = hexdec(uniqid());
    $image_url = 'favicon/favicon_img/';
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
  //Delete Slider favicon 
  public function delete_favicon($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = Favicon::find($id);
      if($slider_img->image){
               
        unlink($slider_img->image);
    
    }
  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }
}
