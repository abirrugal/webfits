<?php

namespace App\Http\Controllers\backend\explore;

use App\Http\Controllers\Controller;
use App\Models\ExploreFurniture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExploreController extends Controller
{
    
    //explore 
public function explore(){

 $explores = ExploreFurniture::all();
    return view('backend.explore1.index', compact('explores'));
 
     }
 
 //Create explore 


  public function create_explore(){
     
     return view('backend.explore1.new');
  }
 
  //Store explore 
 
  public function store_explore(Request $request){
 
     $validator = Validator::make($request->all(), [
        
        'title'                => 'required|min:2',
        'descriptions'               => 'required',

        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 
   ExploreFurniture::create([

            'title'              => $request->title,
            'descriptions'              => $request->descriptions,
            // 'explore_id' => $request->explore_id,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }



 
  //Goto Edit page explore 
  public function edit_explore($id){
 
     $explore = ExploreFurniture::find($id);
 
 
     return view('backend.explore1.edit',compact('explore'));
     
  }
 
  //Update Slider explore 
  public function update_explore(Request $request, $id){
 
 $management = ExploreFurniture::find($id);

    $validator = Validator::make($request->all(), [
        'title'                => 'required|min:2',
        'descriptions'               => 'required',
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 

   $management->update([

    'title'              => $request->title,
    'descriptions'       => $request->descriptions,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider explore 
  public function delete_explore($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = ExploreFurniture::find($id);

  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }


}
