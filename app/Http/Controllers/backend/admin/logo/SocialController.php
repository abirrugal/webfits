<?php

namespace App\Http\Controllers\backend\admin\logo;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SocialController extends Controller
{
    
                 
//social 
public function social(){

    $socials = Social::latest()-> paginate(20);
 
    return view('backend.social.index', compact('socials'));
 
     }
 
 //Create social 
  public function create_social(){
      
     return view('backend.social.new');
  }
 
  //Store social 
 
  public function store_social(Request $request){
 

 



 
   Social::create([

            'facebook'              => $request->facebook,
            'facebook2'              => $request->facebook2,
            'instagram'              => $request->instagram,
            'youtube'              => $request->youtube,
            'linkedin'              => $request->linkedin,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }
 
  //Goto Edit page social 
  public function edit_social($id){
 
 
     $social = Social::find($id);
 
 
     return view('backend.social.edit', compact('social'));
     
  }
 
  //Update Slider social 
  public function update_social(Request $request, $id){
 
 $management = Social::find($id);





 

   $management->update([

    'facebook'              => $request->facebook,
    'facebook2'              => $request->facebook2,
    'instagram'              => $request->instagram,
    'youtube'              => $request->youtube,
    'linkedin'              => $request->linkedin,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider social 
  public function delete_social($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = Social::find($id);

  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }
}
