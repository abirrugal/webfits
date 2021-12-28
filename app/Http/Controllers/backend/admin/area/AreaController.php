<?php

namespace App\Http\Controllers\backend\admin\area;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AreaController extends Controller
{
    //area 
public function area(){

    $areas = Area::latest()-> paginate(20);
 
    return view('backend.area.index', compact('areas'));
 
     }
 
 //Create area 


  public function create_area(){
      $district = District::all();
     return view('backend.area.new',compact('district'));
  }
 
  //Store area 
 
  public function store_area(Request $request){
 
     $validator = Validator::make($request->all(), [
        
        'name'                => 'required|min:2',
        'price'               => 'required',
        // 'district_id'               => 'required'
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 
   Area::create([

            'name'              => $request->name,
            'price'              => $request->price,
            // 'district_id' => $request->district_id,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }



 
  //Goto Edit page area 
  public function edit_area($id){
 
 $district = District::all();
     $area = Area::find($id);
 
 
     return view('backend.area.edit', compact('area','district'));
     
  }
 
  //Update Slider area 
  public function update_area(Request $request, $id){
 
 $management = Area::find($id);

    $validator = Validator::make($request->all(), [
        'name'                => 'required|min:2',
        'price'               => 'required',
        // 'district_id'               => 'required'       
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 

   $management->update([

    'name'              => $request->name,
    'price'              => $request->price,
    // 'district_id' => $request->district_id,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider area 
  public function delete_area($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = Area::find($id);

  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }

  public function getArea($country_name){


    $country_name = urldecode($country_name);
    $country_id = $this->_stateCountryIDForCountryName($country_name);
    $states = DB::table("areas")
                ->where("district_id", $country_id)
                ->lists('name','price','id');
    return json_encode($states);

  }


}
