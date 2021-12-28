<?php

namespace App\Http\Controllers\backend\admin\page_content;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use App\Models\PageCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageContentController extends Controller
{
    //page_content 
public function page_content(){

    $page_contents = PageContent::latest()->paginate(20);
 
    return view('backend.page_content.index', compact('page_contents'));
 
     }
 
 //Create page_content 
  public function create_page_content(){
      $page_title = PageCreate::all();
     return view('backend.page_content.new', compact('page_title'));
  }
 
  //Store page_content 
 
  public function store_page_content(Request $request){
 
     $validator = Validator::make($request->all(), [
        'title'                => 'required',
        'descriptions'                => 'required|min:2',
        'page_create_id'                => 'required',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 
   PageContent::create([

            'title'              => $request->title,
            'descriptions'              => $request->descriptions,
            'page_create_id'              => $request->page_create_id,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }
 
  //Goto Edit page page_content 
  public function edit_page_content($id){
 
 
     $page_content = PageContent::find($id);
     $page_title = PageCreate::all();
 
     return view('backend.page_content.edit', compact('page_content','page_title'));
     
  }
 
  //Update Slider page_content 
  public function update_page_content(Request $request, $id){
 
 $management = PageContent::find($id);

    $validator = Validator::make($request->all(), [

        'title'                => 'required',
        'descriptions'                => 'required|min:2',
        'page_create_id'                => 'required',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 



 

   $management->update([

    'title'              => $request->title,
    'descriptions'              => $request->descriptions,
    'page_create_id'              => $request->page_create_id,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider page_content 
  public function delete_page_content($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = PageContent::find($id);

      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }
}
