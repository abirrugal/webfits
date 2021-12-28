<?php

namespace App\Http\Controllers\backend\admin\size;

use App\Http\Controllers\Controller;
use App\Models\ProductSize;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SizeController extends Controller
{

              
//size 
public function size(){

    $sizes = Size::latest()->paginate(20);
 
    return view('backend.size.index', compact('sizes'));
 
     }
 
 //Create size 
  public function create_size(){
      
     return view('backend.size.new');
  }
 
  //Store size 
 
  public function store_size(Request $request){
 
     $validator = Validator::make($request->all(), [
        'size'                => 'required',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 
   Size::create([

            'size'              => $request->size,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }
 
  //Goto Edit page size 
  public function edit_size($id){
 
 
     $size = Size::find($id);
 
 
     return view('backend.size.edit', compact('size'));
     
  }
 
  //Update Slider size 
  public function update_size(Request $request, $id){
 
 $management = Size::find($id);

    $validator = Validator::make($request->all(), [

        'size'                => 'required',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 

   $management->update([

    'size'              => $request->size,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider size 
  public function delete_size($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = Size::find($id);
      if($slider_img->image){
               
        unlink($slider_img->image);
    
    }
  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }

  public function delete_pro_size($id){

   $pro_size = ProductSize::find($id);
   $pro_size->delete();

   session()->flash('type', 'success');
   session()->flash('message', 'Deleted Success');

   return redirect()->back();

  }
}
