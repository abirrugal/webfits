<?php

namespace App\Http\Controllers\backend\admin\title_category;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\TitleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TitleCategoryController extends Controller
{
   

                 
//title_category 
public function title_category(){

    $title_categorys = TitleCategory::latest()->paginate(20);
 
    return view('backend.title_category.index', compact('title_categorys'));
 
     }
 
 //Create title_category 
  public function create_title_category(){
      
     return view('backend.title_category.new');
  }
 
  //Store title_category 
 
  public function store_title_category(Request $request){
 
     $validator = Validator::make($request->all(), [
        'name'                => 'required',
        'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 

     if($request->hasFile('image') && $request->file('image')->isValid()){


        $image_file = $request->file('image');

        if($image_file){
     
         $img_gen = hexdec(uniqid());
         $image_url = 'title_category/image/';
         $image_ext = strtolower($image_file->getClientOriginalExtension());
     
     
         $img_name = $img_gen.'.'.$image_ext;
         $final_name1 = $image_url.$img_gen.'.'.$image_ext;
     
         $image_file->move($image_url, $img_name);
     
        }
        }


 
        TitleCategory::create([

            'name'              => $request->name,
            'image'              => $final_name1,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }
 
  //Goto Edit page title_category 
  public function edit_title_category($id){
 
 
     $title_category = TitleCategory::find($id);
 
 
     return view('backend.title_category.edit', compact('title_category'));
     
  }
 
  //Update Slider title_category 
  public function update_title_category(Request $request, $id){
 
 $management = TitleCategory::find($id);

    $validator = Validator::make($request->all(), [

        'name'                => 'required',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 


     if($request->hasFile('image') && $request->file('image')->isValid()){

        if($management->image){
               
            unlink($management->image);
        
        }

        $image_file = $request->file('image');

        if($image_file){
     
         $img_gen = hexdec(uniqid());
         $image_url = 'title_category/image/';
         $image_ext = strtolower($image_file->getClientOriginalExtension());
     
     
         $img_name = $img_gen.'.'.$image_ext;
         $final_name1 = $image_url.$img_gen.'.'.$image_ext;
     
         $image_file->move($image_url, $img_name);

      $management->image = $final_name1;
      $management->save();

        }
        }

 

   $management->update([

    'name'              => $request->name,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider title_category 
  public function delete_title_category($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = TitleCategory::find($id);
      if($slider_img->image){
               
        unlink($slider_img->image);
    
    }
  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }



}
