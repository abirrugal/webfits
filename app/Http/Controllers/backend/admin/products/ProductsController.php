<?php
namespace App\Http\Controllers\backend\admin\products;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\Size;
use App\Models\Weight;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Cloudinary;
class ProductsController extends Controller
{

//Products List
    public function products(){

        $data['allproducts'] = Product::with('category')->where('active', 1)->latest()->paginate(10);

        return view('backend.products.products',$data);

    }

//Goto New product form

    public function productsNew(){
        $brands = Brand::select('name','id')->get();
        $product_colors = Color::select('id', 'name')->get();
        $product_sizes = Size::select('id', 'size')->get();
        $product_weights = Weight::all();
        
        return view('backend.products.new', compact('brands', 'product_colors','product_sizes','product_weights'));

    }
//Store Products
    public function productsStore(Request $request){

        $validator = Validator::make($request->all(), [

            'title' => 'required|min:2|unique:products,title',
            'description' => 'required',
            // 'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'price' => 'required|numeric',
            'stock_status' => 'required',
            'category'  => 'required',
            'stock' => 'required'
            
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

            if($request->hasFile('image') && $request->file('image')->isValid()){



            //     $image = $request->file('image');

            //     $imageName= $image->getClientOriginalName().random_int(2,4).'.'.$image->getClientOriginalExtension();

            //    $image_resize = Image::make($image->getRealPath());
            //    $image_resize->resize(600,600);
            //    $image_resize->save(public_path('allfiles/products_image/'.$imageName));



            // $image = $request->file('image');

            // $imageName= $image->getClientOriginalName().random_int(2,4).'.'.$image->getClientOriginalExtension();

         




            $image_file = $request->file('image');

            if($image_file){
         
             $img_gen = hexdec(uniqid());
             $image_url = 'product/image/';
             $image_ext = strtolower($image_file->getClientOriginalExtension());
         
         
             $img_name = $img_gen.'.'.$image_ext;
             $final_name1 = $image_url.$img_gen.'.'.$image_ext;

             $image_resize = Image::make($image_file->getRealPath());
             $image_resize->resize(600,600);
             $image_resize->save(public_path($image_url.$img_name));
         
            
         
            }

         

            
        }else{
            $final_name1 = null;

        }

        if($request->child_category!==null && $request->child_category!==""){
            
            $category_id = $request->child_category;
            
        }else{         
            $category_id = ($request->sub_category)? $request->sub_category : $request->category;
        }




// Calculate Discount 

        if($request->discount !==null && $request->discount !== ""){

            $total_amount = $request->price;
            $percentage_discount = $request->discount;
        
        $discount_value = ($total_amount / 100) * $percentage_discount;

        $discount_value = (int)$discount_value;
          
        }else{
            $discount_value = 0;
            $percentage_discount = null;
        }
        



 $product =   Product::create([

        'category_id'   => $category_id,
        'brand_id'      => $request->brand_id,
        'title'         => $request->title,
        'description'   => $request->description,
        'image'         => $final_name1,
        'in_stock'      => $request->stock_status,
        'price'         => $request->price,
        'sale_price'    => $request->price - $discount_value,
        'active'        => $request->product_status,
        'stock_amount'  => $request->stock,
        'discount'      => $percentage_discount,
        'discounted_price'      => $discount_value,
        'shipping_cost'      => $request->additional,

        'premium'      => $request->premium,
        'comfort'      => $request->comfort,
        'decor_dining'      => $request->decor_dining,
        'bedroom'      => $request->bedroom,
        'comfy_bedding'      => $request->comfy_bedding,
  
        

    ]);



// Color Image 1


if($request->c_name1 !== null && $request->color1 !== null && $request->color_image1 !== null){



    $image_file = $request->file('color_image1');

    if($image_file){
 
     $img_gen = hexdec(uniqid());
     $image_url = 'product/color_image/1/';
     $image_ext = strtolower($image_file->getClientOriginalExtension());
 
 
     $img_name = $img_gen.'.'.$image_ext;
     $final_name1 = $image_url.$img_gen.'.'.$image_ext;
 
     $image_resize = Image::make($image_file->getRealPath());
     $image_resize->resize(600,600);
     $image_resize->save(public_path($image_url.$img_name));
 
    }



    $product->product_color_images()->create([

        'name' => $request->c_name1,
        'color' => $request->color1,
        'image' => $final_name1,
    ]);

}


// Color image 2 

if($request->c_name2 !== null && $request->color2 !== null && $request->color_image2 !== null){



    $image_file = $request->file('color_image2');

    if($image_file){
 
     $img_gen = hexdec(uniqid());
     $image_url = 'product/color_image/2/';
     $image_ext = strtolower($image_file->getClientOriginalExtension());
 
 
     $img_name = $img_gen.'.'.$image_ext;
     $final_name1 = $image_url.$img_gen.'.'.$image_ext;
 
     $image_resize = Image::make($image_file->getRealPath());
     $image_resize->resize(600,600);
     $image_resize->save(public_path($image_url.$img_name));
 
    }


    $product->product_color_images()->create([

        'name' => $request->c_name2,
        'color' => $request->color2,
        'image' => $final_name1,
    ]);

}



// Color image 3

if($request->c_name3 !== null && $request->color3 !== null && $request->color_image3 !== null){



    $image_file = $request->file('color_image3'); 

    if($image_file){
 
     $img_gen = hexdec(uniqid());
     $image_url = 'product/color_image/3/';
     $image_ext = strtolower($image_file->getClientOriginalExtension());
 
 
     $img_name = $img_gen.'.'.$image_ext;
     $final_name1 = $image_url.$img_gen.'.'.$image_ext;
 
     $image_resize = Image::make($image_file->getRealPath());
     $image_resize->resize(600,600);
     $image_resize->save(public_path($image_url.$img_name));
 
    }


    $product->product_color_images()->create([

        'name' => $request->c_name3,
        'color' => $request->color3,
        'image' => $final_name1,
    ]);

}


// Color image 4

if($request->c_name4 !== null && $request->color4 !== null && $request->color_image4 !== null){



    $image_file = $request->file('color_image4'); 

    if($image_file){
 
     $img_gen = hexdec(uniqid());
     $image_url = 'product/color_image/4/';
     $image_ext = strtolower($image_file->getClientOriginalExtension());
 
 
     $img_name = $img_gen.'.'.$image_ext;
     $final_name1 = $image_url.$img_gen.'.'.$image_ext;
 
     $image_resize = Image::make($image_file->getRealPath());
     $image_resize->resize(600,600);
     $image_resize->save(public_path($image_url.$img_name));
 
    }


    $product->product_color_images()->create([

        'name' => $request->c_name4,
        'color' => $request->color4,
        'image' => $final_name1,
    ]);

}


// Color image 4

if($request->c_name5 !== null && $request->color5 !== null && $request->color_image5 !== null){



    $image_file = $request->file('color_image5'); 

    if($image_file){
 
     $img_gen = hexdec(uniqid());
     $image_url = 'product/color_image/5/';
     $image_ext = strtolower($image_file->getClientOriginalExtension());
 
 
     $img_name = $img_gen.'.'.$image_ext;
     $final_name1 = $image_url.$img_gen.'.'.$image_ext;
 
     $image_resize = Image::make($image_file->getRealPath());
     $image_resize->resize(600,600);
     $image_resize->save(public_path($image_url.$img_name));
 
    }


    $product->product_color_images()->create([

        'name' => $request->c_name5,
        'color' => $request->color5,
        'image' => $final_name1,
    ]);

}




    
    $input = $request->all();
    $input['room_ids'] = $request->input('room_ids');

     
if($input['room_ids'] !== null){


    foreach($input['room_ids'] as $value){

        $color = Color::find($value);
          $color_name =  $color->name;
          $color_show =  $color->color;

        
     
       $product->product_colors()->create([

           'color_id' => $value,
           'color_name' => $color_name,
           'color' => $color_show,
       ]);


    
    }

}




    $input = $request->all();
    $input['size_ids'] = $request->input('size_ids');

     
    if($input['size_ids'] !== null){

     foreach($input['size_ids'] as $value){

        $size = Size::find($value);
          $pro_size =  $size->size;
     
       $product->product_sizes()->create([

           'size_id' => $value,
           'size' => $pro_size,
       ]);


     }


    }



    
    $input = $request->all();
    $input['weight_ids'] = $request->input('weight_ids');

     
    if($input['weight_ids'] !== null){

     foreach($input['weight_ids'] as $value){

        $weight = Weight::find($value);

    
          $pro_weight =  $weight->weight;
          $price =  $weight->price;


          if($request->discount !==null && $request->discount !== ""){

            $total_amount = $price;
            $percentage_discount = $request->discount;
        
        $discount_value = ($total_amount / 100) * $percentage_discount;

        $discount_value = (int)$discount_value;
        $price = $discount_value;
          
        }

        
     
       $product->product_weights()->create([

           'weight_id' => $value,
           'weight' => $pro_weight,
           'price' => $price
       ]);


     }


    }
    
       
  
   $this->successMessage("Product successfully created");
   return redirect()->back();
    }

//Show Product
    public function productsShow($id){

        $product = Product::with('category')->findOrFail($id);
        return view('backend.products.show',['product' => $product]);

    }

//Edit Products
    public function productsEdit($id){
        $product = Product::find($id);
        $brands = Brand::all();
        $product_colors = Color::all();
        $product_sizes = Size::all();
        $product_weights = Weight::all();


        return view('backend.products.edit', compact('product','brands','product_colors','product_sizes','product_weights'));
    }

//Update Products

    public function productsUpdate(Request $request, $id){
        $validator = Validator::make($request->all(), [

            'title'         => 'required|min:2',
            'description'   => 'required',
            'image'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'price'         => 'required|numeric',
            'stock_status'  => 'required',
            'category'      => 'required',
            'stock'         => 'required'          
            
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $product = Product::find($id);


    

                 
        //   $image = $request->file('image');
        
        //   $imageName= $image->getClientOriginalName().random_int(2,4).'.'.$image->getClientOriginalExtension();
        
        //   $image_resize = Image::make($image->getRealPath());
        //    $image_resize->resize(600,600);
        //    $image_resize->save(public_path('allfiles/products_image/'.$imageName));

        //        unlink(public_path().'/allfiles/products_image/'.$product->image);



        //        $product->image = $imageName;
        //        $product->save();


        if($request->hasFile('image') && $request->file('image')->isValid()){


        
            $image_file = $request->file('image');
    
            if($image_file){
         
             if($product->image){
                    
               unlink($product->image);
           
           }
       
         
         
             $img_gen = hexdec(uniqid());
             $image_url = 'product/image/';
             $image_ext = strtolower($image_file->getClientOriginalExtension());
         
         
             $img_name = $img_gen.'.'.$image_ext;
             $final_name1 = $image_url.$img_gen.'.'.$image_ext;
         
             $image_file->move($image_url, $img_name);
         
             $product->image = $final_name1;
             $product->save();
         
            }
    
    
        }

               
    
        if($request->child_category!==null && $request->child_category!=="" && $request->child_category!==""){
            $category_id = $request->child_category;
            $product->category_id = $category_id;
            $product->save();
            
        }else{

            $category_id = ($request->sub_category)? $request->sub_category : $request->category;
            $product->category_id = $category_id;
            $product->save();
        }

        if($request->brand_id !==null && $request->brand_id !==""){
             $brand_id = $request->brand_id;
             $product->brand_id = $brand_id;
             $product->save();
        }


// Calcualte Discount 


        if($request->discount !==null && $request->discount !== ""){

            $total_amount = $request->price;
            $percentage_discount = $request->discount;
        
        $discount_value = ($total_amount / 100) * $percentage_discount;
        $discount_value = (int)$discount_value;
          
        }else{
            $discount_value = 0;
            $percentage_discount = null;
        }



    Product::find($id)->update([

        
        'title'             => $request->title,
        'description'       => $request->description,
        'in_stock'          => $request->stock_status,
        'price'             => $request->price,
        'sale_price'        => $request->price - $discount_value,
        'active'            => $request->product_status,
        'stock_amount'      => $request->stock,
        'discount'          => $percentage_discount,
        'shipping_cost'      => $request->additional,
        'discounted_price'  => $discount_value,
        'premium'      => $request->premium,
        'comfort'      => $request->comfort,
        'decor_dining'      => $request->decor_dining,
        'bedroom'      => $request->bedroom,
        'comfy_bedding'      => $request->comfy_bedding,



    ]);




    $input = $request->all();
    $input['room_ids'] = $request->input('room_ids');

     
if($input['room_ids'] !== null){


    foreach($input['room_ids'] as $value){

        $color = Color::find($value);
          $color_name =  $color->name;
          $color_show =  $color->color;

        
     
       $product->product_colors()->create([

           'color_id' => $value,
           'color_name' => $color_name,
           'color' => $color_show,
       ]);


    
    }

}





    
    $input = $request->all();
    $input['size_ids'] = $request->input('size_ids');

     
    if($input['size_ids'] !== null){

     foreach($input['size_ids'] as $value){

        $size = Size::find($value);
          $size =  $size->size;
     
       $product->product_sizes()->create([

           'size_id' => $value,
           'size' => $size,
       ]);


     }
    
    }


    $input = $request->all();
    $input['weight_ids'] = $request->input('weight_ids');

     
    if($input['weight_ids'] !== null){

     foreach($input['weight_ids'] as $value){

        $weight = Weight::find($value);

    
          $pro_weight =  $weight->weight;
          $price =  $weight->price;

          if($request->discount !==null && $request->discount !== ""){

            $total_amount = $price;
            $percentage_discount = $request->discount;
        
        $discount_value = ($total_amount / 100) * $percentage_discount;

        $discount_value = (int)$discount_value;
        $price = $discount_value;
          
        }
     
        $product->product_weights()->create([

            'weight_id' => $value,
            'weight' => $pro_weight,
            'price' => $price
        ]);


     }


    }


   $this->successMessage("Product successfully updated");
   return redirect()->back();
        
    }

//Delete Products

    public function productsDelete($id){

        $product = Product::find($id);
  
    if ($product->product_colors->count() > 0) {
        foreach ($product->product_colors as $key => $color) {
            $color->delete();
         }
    }
    

    if ($product->product_sizes->count() > 0) {

        foreach ($product->product_sizes as $key => $size) {
            $size->delete();
         }
    }

    

        $product->delete();

        if($product->image){
            unlink($product->image);   
        }

        session()->flash('type','success');
        session()->flash('message','Product successfully deleted');
        return redirect()->back();
    }

    public function products_stock(){
        $data['total_products'] =  Product::select('stock_amount')->sum('stock_amount');
        $data['total_sales'] = Product::select('sale_amount')->sum('sale_amount');
        $data['total_remaining'] =$data['total_products'] - $data['total_sales'] ;
        $products = Product::latest()->paginate(20);
        return view('backend.products.stock', compact('products','data'));
    }

    public function allproducts(){
        $products = Product::latest()->paginate(20);
        $title = "Products List.";
        return view('frontend.products.title_product.title_product_list', compact('products','title'));
    }





    // public function image_upload($image_file, $number){

    //     if($image_file){
 
    //         $img_gen = hexdec(uniqid());
    //         $image_url = 'product/color_image/'.$number.'/';
    //         $image_ext = strtolower($image_file->getClientOriginalExtension());
        
        
    //         $img_name = $img_gen.'.'.$image_ext;
    //         $final_name1 = $image_url.$img_gen.'.'.$image_ext;
        
    //         $image_file->move($image_url, $img_name);
        
    //        }
    // }

    


}