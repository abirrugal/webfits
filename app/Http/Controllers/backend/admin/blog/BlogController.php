<?php

namespace App\Http\Controllers\backend\admin\blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
         
//blog 
public function blog(){

    $blogs = Blog::latest()-> paginate(20);
 
    return view('backend.blog.index', compact('blogs'));
 
     }
 
 //Create blog 
  public function create_blog(){
      
     return view('backend.blog.new');
  }
 
  //Store blog 
 
  public function store_blog(Request $request){
 
     $validator = Validator::make($request->all(), [
        'image'       => 'required| image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        'title'                => 'required|min:2',
        'details'                => 'required|min:2',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 

     $image_file = $request->file('image');

   if($image_file){

    $img_gen = hexdec(uniqid());
    $image_url = 'blog/blog_img/';
    $image_ext = strtolower($image_file->getClientOriginalExtension());


    $img_name = $img_gen.'.'.$image_ext;
    $final_name1 = $image_url.$img_gen.'.'.$image_ext;

    $image_file->move($image_url, $img_name);

   }


 
   Blog::create([

            'image'             => $final_name1,
            'title'              => $request->title,
            'details'              => $request->details,
         
         ]);
 




     $this->successMessage('Created success');
     return redirect()->back();
 
     
 
 
  }


//   Show Blog 

public function blog_show($id){

    $blog = Blog::find($id);
    return view('frontend.blog.showblog', compact('blog'));
}
 
  //Goto Edit page blog 
  public function edit_blog($id){
 
 
     $blog = Blog::find($id);
 
 
     return view('backend.blog.edit', compact('blog'));
     
  }
 
  //Update Slider blog 
  public function update_blog(Request $request, $id){
 
 $management = Blog::find($id);

    $validator = Validator::make($request->all(), [

        'title'                => 'required|min:2',
        'details'                => 'required|min:2',
        
     ]);
 
     if($validator->fails()){
         return redirect()->back()->withErrors($validator)->withInput();
     }
 

     $image_file = $request->file('image');

   if($image_file){

    if($management->image){
           
      unlink($management->image);
  
  }

    $img_gen = hexdec(uniqid());
    $image_url = 'blog/blog_img/';
    $image_ext = strtolower($image_file->getClientOriginalExtension());


    $img_name = $img_gen.'.'.$image_ext;
    $final_name1 = $image_url.$img_gen.'.'.$image_ext;

    $image_file->move($image_url, $img_name);

    $management->image = $final_name1;
    $management->save();

   }
 


 
   $management->update([

    'title'              => $request->title,
    'details'              => $request->details,
         
]);
 
          

     $this->successMessage('Updated success');
     return redirect()->back();
 
     
 
 
  }
  //Delete Slider blog 
  public function delete_blog($id){
 
    if (auth()->user()->role_as !== 'creator'){

      $slider_img = Blog::find($id);
      if($slider_img->image){
               
        unlink($slider_img->image);
    
    }
  
      $slider_img->delete();
      $this->successMessage('Deleted success');
      return redirect()->back();
    }

  }
}
