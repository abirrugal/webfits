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
class SubCategoriesController extends Controller
{
    
//SubCategories list

public function subCategories(){
    $allcategories = Category::with('child_category')->whereNotNull('category_id')->latest()->paginate(10);
    return view('backend.categories.sub_categories.sub_categories', compact('allcategories'));
}

//Goto add new SubCategory form page
public function newsubCategory(){

    $categories= Category::with('parent_category')->where('category_id', null)->get();
    return view('backend.categories.sub_categories.sub_new', compact('categories'));
}

// Store Categories to the database


public function storesubCategories(Request $request){

    $validator = Validator::make($request->all(),[
        'category_id' => 'required|numeric',
        'sub_category' => 'required|min:1',
        // 'sub_img'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000'

    ]);

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }



        if($request->hasFile('sub_img') && $request->file('sub_img')->isValid()){

  
            $image_file = $request->file('sub_img');

            if($image_file){
         
             $img_gen = hexdec(uniqid());
             $image_url = 'sub_category/banner/';
             $image_ext = strtolower($image_file->getClientOriginalExtension());
         
         
             $img_name = $img_gen.'.'.$image_ext;
             $final_name1 = $image_url.$img_gen.'.'.$image_ext;
         
             $image_file->move($image_url, $img_name);
         
            }


        }else{
            $final_name1 = null;
        }

        Category::create([
            'category_id' => $request->category_id,
            'name' => trim($request->sub_category),
            'description' => trim($request->description),
            'banner' => $final_name1

        ]);
  
    $this->successMessage('SubCategory saved success');
    return redirect()->back();


}

//Show SubCategory

public function showSubCategory($id){
    $subcategory = Category::with('parent_category')->findOrFail($id);
    return view('backend.categories.sub_categories.sub_show',compact('subcategory'));
}

//Goto Edit SubCategory Page

public function subCategoryEdit($id){

$category = Category::find($id);

return view('backend.categories.sub_categories.sub_edit', compact('category'));

}

//Update SubCategory

public function subCategoryUpdate(Request $request, $id){
$validator = Validator::make($request->all(),[
    
    'sub_category' => 'required|min:1'
    ]);

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $subcategory = Category::find($id);

    if($request->hasFile('sub_img') && $request->file('sub_img')->isValid()){
    

        $image_file = $request->file('child_img');

        if($image_file){
     
         if($subcategory->banner){
                
           unlink($subcategory->banner);
       
       }
   
     
     
         $img_gen = hexdec(uniqid());
         $image_url = 'sub_category/banner/';
         $image_ext = strtolower($image_file->getClientOriginalExtension());
     
     
         $img_name = $img_gen.'.'.$image_ext;
         $final_name1 = $image_url.$img_gen.'.'.$image_ext;
     
         $image_file->move($image_url, $img_name);
     
         $subcategory->banner = $final_name1;
         $subcategory->save();
     
        }
        
    }
 

Category::find($id)->update([

    'name' => trim($request->sub_category)
]);
$this->successMessage("SubCategory updated success");
return redirect()->back();


}

//Delete SubCategory

public function subCategoryDelete(Request $request , $id){

$subcategory = Category::find($id);

if($subcategory->banner){
                
    unlink($subcategory->banner);

}

$subcategory->delete();


session()->flash('type','success');
session()->flash('message','SubCategory deleted success');
return redirect()->back();

}

}