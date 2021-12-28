<?php

namespace App\Http\Controllers\backend\admin\offers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfferCategoryController extends Controller
{
    
//offer list

public function offer(){
    $alloffer = Category::whereNotNull('type')->latest()->paginate(20);
    return view('backend.offer.index', compact('alloffer'));
}

//Goto add new Category form page
public function newoffer(){
    return view('backend.offer.new');
}

// Store offer to the database

public function storeOffer(Request $request){

    $validator = Validator::make($request->all(),[
        'category' => 'required|min:1',
        // 'image'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000'
    ]);

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Store Image If Provide 


        if($request->hasFile('image') && $request->file('image')->isValid()){

    

            $image_file = $request->file('image');

            if($image_file){
         
             $img_gen = hexdec(uniqid());
             $image_url = 'category/banner/';
             $image_ext = strtolower($image_file->getClientOriginalExtension());
         
         
             $img_name = $img_gen.'.'.$image_ext;
             $final_name1 = $image_url.$img_gen.'.'.$image_ext;
         
             $image_file->move($image_url, $img_name);
         
            }


        }
        
        else{
            $final_name1 = null;
        }


        Category::create([
        
            'name' => trim( $request->category),
            'description' => trim( $request->description),
            'banner' => $final_name1,
            'type' => 'offer',
        ]);
   
      
    
    $this->successMessage('Category successfully created');
    return redirect()->back();


}

//Show Category details

public function offerShow($id){

$category = Category::findOrFail($id);
return view('backend.offer.show',['category' => $category]);

}

//Goto Edit Category Page

public function offerEdit($id){

$category = Category::find($id);

return view('backend.offer.edit', compact('category'));

}

//Update Category

public function offerUpdate(Request $request, $id){

$validator = Validator::make($request->all(),[
    'category' => 'required|min:1',
    // 'image'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000'

    ]);

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $category_img = Category::find($id);

if($request->hasFile('image') && $request->file('image')->isValid()){


    
 $image_file = $request->file('image');

 if($image_file){

  if($category_img->banner){
         
    unlink($category_img->banner);

}



  $img_gen = hexdec(uniqid());
  $image_url = 'category/banner/';
  $image_ext = strtolower($image_file->getClientOriginalExtension());


  $img_name = $img_gen.'.'.$image_ext;
  $final_name1 = $image_url.$img_gen.'.'.$image_ext;

  $image_file->move($image_url, $img_name);

  $category_img->banner = $final_name1;
  $category_img->save();

 }

}

    Category::find($id)->update([

        'name' => trim($request->category),
        'description' => trim( $request->description),
        'type' => 'offer',

    ]);

$this->successMessage("Category successfully updated");
return redirect()->back();


}

//Delete Category

public function categoryDelete($id){

$category = Category::find($id);


if($category->banner){
            
unlink($category->banner);

}

$category->delete();


session()->flash('type','success');
session()->flash('message','Category successfully deleted');
return redirect()->back();

}


}
