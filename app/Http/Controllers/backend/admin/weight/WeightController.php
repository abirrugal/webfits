<?php

namespace App\Http\Controllers\backend\admin\weight;

use App\Http\Controllers\Controller;
use App\Models\Weight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WeightController extends Controller
{
                 
//weight 
public function weight(){

    $weights = Weight::latest()->paginate(20);
 
    return view('backend.weight.index', compact('weights'));
 
     }
 
 //Create weight 
  public function create_weight(){
      
     return view('backend.weight.new');
  }
 
  //Store weight 
 
  public function store_weight(Request $request){
 
     $validator = Validator::make($request->all(), [
        'weight'                => 'required',
        'price'                => 'required',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 
   Weight::create([

            'weight'              => $request->weight,
            'price'              => $request->price,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }
 
  //Goto Edit page weight 
  public function edit_weight($id){
 
 
     $weight = Weight::find($id);
 
 
     return view('backend.weight.edit', compact('weight'));
     
  }
 
  //Update Slider weight 
  public function update_weight(Request $request, $id){
 
 $management = Weight::find($id);

    $validator = Validator::make($request->all(), [

        'weight'                => 'required',
        'price'                => 'required',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 

   $management->update([

    'weight'              => $request->weight,
    'price'              => $request->price,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider weight 
  public function delete_weight($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = Weight::find($id);

  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }

  public function delete_pro_weight($id){

   $pro_size = Weight::find($id);
   $pro_size->delete();

   session()->flash('type', 'success');
   session()->flash('message', 'Deleted Success');

   return redirect()->back();

  }


}
