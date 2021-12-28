<?php

namespace App\Http\Controllers\backend\admin\main_slider;

use App\Http\Controllers\Controller;
use App\Models\MainSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainSliderController extends Controller
{
      // MainSlider Slider Part 


//MainSlider Slider
public function slider(){

    $sliders = MainSlider::all();
 
    return view('backend.slider.index', compact('sliders'));
 
     }
 
 //Create MainSlider Slider
  public function create_slider(){
      
     return view('backend.slider.new');
  }
 
  //Store MainSlider Slider
 
  public function store_slider(Request $request){
 
     $validator = Validator::make($request->all(), [
 
         'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
         'image_sm'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 
 
     $image_file1 = $request->file('image');
     $image_file2 = $request->file('image_sm');
 
     
     if($image_file1){
 
         $img_gen1 = hexdec(uniqid());
         $image_url1 = 'images/slider/pc/';
         $image_ext1 = strtolower( $image_file1->getClientOriginalExtension());
 
 
         $img_name1 = $img_gen1.'.'.$image_ext1;
         $final_name1 = $image_url1.$img_gen1.'.'.$image_ext1;
 
         $image_file1->move($image_url1, $img_name1);


     }

     if($image_file2){
 
         $img_gen = hexdec(uniqid());
         $image_url = 'images/slider/mobile/';
         $image_ext = strtolower( $image_file1->getClientOriginalExtension());
 
 
         $img_name = $img_gen.'.'.$image_ext;
         $final_name2 = $image_url.$img_gen.'.'.$image_ext;
 
         $image_file2->move($image_url, $img_name);


     }



     
     MainSlider::create([
 
        'image' => $final_name1,
        'image_sm' => $final_name2,
    ]);

    $this->successMessage('Created success');
    return redirect()->back();
 
 
    
  }
 
  //Goto Edit page MainSlider Slider
  public function edit_slider($id){
 
 
     $sliders = MainSlider::find($id);
 
 
     return view('backend.slider.edit', compact('sliders'));
     
  }
 
  //Update Slider MainSlider Slider
  public function update_slider(Request $request, $id){
 
 $slide_img = MainSlider::find($id);
 
     $validator = Validator::make($request->all(), [
 
         'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
         'image_sm'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 
 
     $image_file = $request->file('image');
     $image_file2 = $request->file('image_sm');
    
  
     if($image_file){
 
 if($slide_img->image){
     unlink($slide_img->image);
 
 }
 
         $img_gen = hexdec(uniqid());
         $image_url = 'images/slider/';
         $image_ext = strtolower( $image_file->getClientOriginalExtension());
 
 
         $img_name = $img_gen.'.'.$image_ext;
         $final_name1 = $image_url.$img_gen.'.'.$image_ext;
 
         $image_file->move($image_url, $img_name);
 
         $slide_img->update([
 
             'image' => $final_name1
         ]);
 
  
 
     }


     if($image_file2){

        if($slide_img->image_sm){
            unlink($slide_img->image_sm);
        
        }
 

        
                $img_gen = hexdec(uniqid());
                $image_url = 'images/slider/';
                $image_ext = strtolower( $image_file->getClientOriginalExtension());
        
        
                $img_name = $img_gen.'.'.$image_ext;
                $final_name2 = $image_url.$img_gen.'.'.$image_ext;
        
                $image_file->move($image_url, $img_name);
        
                $slide_img->update([
        
                    'image_sm' => $final_name2
                ]);
        
         
        
            }
 

     $this->successMessage('Updated success');
     return redirect()->back();
 
  }
  //Delete Slider MainSlider Slider
  public function delete_slider($id){
     if (auth()->user()->role_as !== 'creator'){
 
         $slider_img = MainSlider::find($id);
         if($slider_img->slider_image){
             unlink($slider_img->slider_image);
         
         }
         $slider_img->delete();
         $this->successMessage('Deleted success');
         return redirect()->back();
     }

     
                                         
  }

  public function slider_change_sts($id){
    $voucher = MainSlider::find($id);
  
   
    if ($voucher->status == "active") {
     
      $voucher->status = "inactive";
      $voucher->save();
    }else{
  
      
      $voucher->status = "active";
      $voucher->save();
    }
    
 
    $this->successMessage('Status Changed Success');
    return redirect()->back();
  }
}

