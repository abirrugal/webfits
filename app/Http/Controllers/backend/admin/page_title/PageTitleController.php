<?php

namespace App\Http\Controllers\backend\admin\page_title;

use App\Http\Controllers\Controller;
use App\Models\PageCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageTitleController extends Controller
{
         
//page_title 
public function page_title(){

    $page_titles = PageCreate::latest()-> paginate(20);
 
    return view('backend.page_title.index', compact('page_titles'));
 
     }
 
 //Create page_title 
  public function create_page_title(){
      
     return view('backend.page_title.new');
  }
 
  //Store page_title 
 
  public function store_page_title(Request $request){
 
     $validator = Validator::make($request->all(), [
        'title'                => 'required',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 
   PageCreate::create([

            'title'              => $request->title,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }
 
  //Goto Edit page page_title 
  public function edit_page_title($id){
 
 
     $page_title = PageCreate::find($id);
 
 
     return view('backend.page_title.edit', compact('page_title'));
     
  }
 
  //Update Slider page_title 
  public function update_page_title(Request $request, $id){
 
 $management = PageCreate::find($id);

    $validator = Validator::make($request->all(), [

        'title'                => 'required',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 

   $management->update([

    'title'              => $request->title,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider page_title 
  public function delete_page_title($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = PageCreate::find($id);

  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }
}
