<?php

namespace App\Http\Controllers\backend\admin\district;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DistrictController extends Controller
{
              
//district 
public function district(){

    $districts = District::latest()-> paginate(20);
 
    return view('backend.district.index', compact('districts'));
 
     }
 
 //Create district 
  public function create_district(){
      
     return view('backend.district.new');
  }
 
  //Store district 
 
  public function store_district(Request $request){
 
     $validator = Validator::make($request->all(), [
        
        'name'                => 'required|min:2',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 
   District::create([

            'name'              => $request->name,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }
 
  //Goto Edit page district 
  public function edit_district($id){
 
 
     $district = District::find($id);
 
 
     return view('backend.district.edit', compact('district'));
     
  }
 
  //Update Slider district 
  public function update_district(Request $request, $id){
 
 $management = District::find($id);

    $validator = Validator::make($request->all(), [

        'name'                => 'required|min:2',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 

   $management->update([

    'name'              => $request->name,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider district 
  public function delete_district($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = District::find($id);

  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }
}
