<?php

namespace App\Http\Controllers\backend\admin\categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Cloudinary;
class ChildCategoriesController extends Controller
{  
//childCategories child

public function childCategories(){
    $allcategories = Category::with('child_category')->whereNotNull('subcategory_id')->latest()->paginate(10);
    return view('backend.categories.child_categories.index',compact('allcategories'));
}

//Goto add new childCategory form page
public function newChildCategory(){

    $subCategories = Category::with('child_category')->whereNotNull('category_id')->latest()->get();
    return view('backend.categories.child_categories.new', compact('subCategories'));
}

// Store childCategories to the database

public function storeChildCategories(Request $request){

    $validator = Validator::make($request->all(),[
        'subcategory_id' => 'required|numeric',
        'child_category' => 'required|min:1',
        // 'child_img'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000'

    ]);

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }

    

        if($request->hasFile('child_img') && $request->file('child_img')->isValid()){


            $image_file = $request->file('child_img');

            if($image_file){
         
             $img_gen = hexdec(uniqid());
             $image_url = 'child_category/banner/';
             $image_ext = strtolower($image_file->getClientOriginalExtension());
         
         
             $img_name = $img_gen.'.'.$image_ext;
             $final_name1 = $image_url.$img_gen.'.'.$image_ext;
         
             $image_file->move($image_url, $img_name);
         
            }

   
        }else{
            $final_name1 = null;
        }

        Category::create([
            'subcategory_id' => $request->subcategory_id,
            'name' => trim($request->child_category),
            'description' => trim($request->description),
            'feature' => trim($request->feature),
            'banner' => $final_name1
        ]);

    $this->successMessage('SubCategory saved success');
    return redirect()->back();


}

//Show childCategory

public function showChildCategory($id){

    $subcategory = Category::with('parent_category')->findOrFail($id);
    return view('backend.categories.child_categories.show',compact('subcategory'));

}


//Goto Edit childCategory Page

public function childCategoryEdit($id){

$data['category'] = Category::find($id);

return view('backend.categories.child_categories.edit')->with($data);

}

//Update childCategory

public function childCategoryUpdate(Request $request, $id){
$validator = Validator::make($request->all(),[
    
    'child_category' => 'required|min:1',

    ]);

    

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }

$child_category = Category::find($id);

    if($request->hasFile('child_img') && $request->file('child_img')->isValid()){


        
        $image_file = $request->file('child_img');

        if($image_file){
     
         if($child_category->image){
                
           unlink($child_category->image);
       
       }
   
     
     
         $img_gen = hexdec(uniqid());
         $image_url = 'child_category/banner/';
         $image_ext = strtolower($image_file->getClientOriginalExtension());
     
     
         $img_name = $img_gen.'.'.$image_ext;
         $final_name1 = $image_url.$img_gen.'.'.$image_ext;
     
         $image_file->move($image_url, $img_name);
     
         $child_category->banner = $final_name1;
         $child_category->save();
     
        }


    }

    if($request->subcategory_id !=='no_id'){
        $child_category->subcategory_id = $request->subcategory_id;
        $child_category->save();

    }


Category::find($id)->update([
    
    'name' => trim($request->child_category),
    'description' => trim($request->description),
    'feature' => trim($request->feature),

]);
$this->successMessage("Child Category updated success");
return redirect()->back();



}

//Delete childCategory

public function childCategoryDelete(Request $request , $id){

$childcategory = Category::find($id);

if($childcategory->banner){
                
    unlink($childcategory->banner);

}

$childcategory->delete();

session()->flash('type','success');
session()->flash('message','SubCategory deleted success');
return redirect()->back();
}

}