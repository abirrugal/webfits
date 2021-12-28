<?php

namespace App\Http\Controllers\backend\admin\product_color;

use App\Http\Controllers\Controller;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductColorController extends Controller
{
         
//product_color 
public function product_color(){

    $product_colors = ProductColor::latest()-> paginate(20);
 
    return view('backend.product_color.index', compact('product_colors'));
 
     }
 
 //Create product_color 
  public function create_product_color(){
      
     return view('backend.product_color.new');
  }
 
  //Store product_color 
 
  public function store_product_color(Request $request){
 
     $validator = Validator::make($request->all(), [
        'color'                => 'required',
        'name'                => 'required|min:2',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 
   ProductColor::create([

            'name'              => $request->name,
            'color'              => $request->color,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }
 
  //Goto Edit page product_color 
  public function edit_product_color($id){
 
 
     $product_color = ProductColor::find($id);
 
 
     return view('backend.product_color.edit', compact('product_color'));
     
  }
 
  //Update Slider product_color 
  public function update_product_color(Request $request, $id){
 
 $management = ProductColor::find($id);

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
  //Delete Slider product_color 
  public function delete_product_color($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = ProductColor::find($id);
 
  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }
}
