<?php

namespace App\Http\Controllers\backend\admin\color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ColorController extends Controller
{
           
//color 
public function color(){

    $colors = Color::latest()-> paginate(20);
 
    return view('backend.color.index', compact('colors'));
 
     }
 
 //Create color 
  public function create_color(){
      
     return view('backend.color.new');
  }
 
  //Store color 
 
  public function store_color(Request $request){
 
     $validator = Validator::make($request->all(), [
        'color'                => 'required',
        'name'                => 'required|min:2',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 
   Color::create([

            'name'              => $request->name,
            'color'              => $request->color,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }
 
  //Goto Edit page color 
  public function edit_color($id){
 
 
     $color = Color::find($id);
 
 
     return view('backend.color.edit', compact('color'));
     
  }
 
  //Update Slider color 
  public function update_color(Request $request, $id){
 
 $management = Color::find($id);

    $validator = Validator::make($request->all(), [

        'color'                => 'required',
        'name'                => 'required|min:2',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 

   $management->update([

    'name'              => $request->name,
    'color'              => $request->color,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider color 
  public function delete_color($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = Color::find($id);
      if($slider_img->image){
               
        unlink($slider_img->image);
    
    }
  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }
}
