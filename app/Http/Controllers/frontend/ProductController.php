<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\ExploreFurniture;
use App\Models\MainSlider;
use App\Models\Order;
use App\Models\Product;
use App\Models\TitleCategory;
use Illuminate\Http\Request;
// use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
class ProductController extends Controller
{
//List of Categories to the home page

    public function productsIndex(){

        // $data['products'] = Product::where('brand','Xiomi')->get();
      if(auth()->user()){
        $data['orders'] = auth()->user()->orders;

      }


      // $data['premium_products'] = TitleCategory::where('status','Premium Sofa')->first();
      // $data['comfort_products'] = TitleCategory::where('status','Ecustomize Comfort')->first();
      // $data['decor_dining_products'] = TitleCategory::where('status','Decor Your Dining Room')->first();
      // $data['bedroom_products'] = TitleCategory::where('status','Bed Room')->first();
      // $data['comfy_bedding_products'] = TitleCategory::where('status','Comfy Bedding')->first();

      $data['sliders'] = MainSlider::where('status','active')->get();
      // $data['explore'] = ExploreFurniture::take(1)->get();
      


        $data['blogs'] = Blog::latest()->take(3)->get();
        $data['features'] = Product::whereNotNull('discount')->latest()->take(8)->get();
        $data['top_products'] = Product::where('remaining_amount','>', 0)->latest()->take(8)->get();
        $data['recent_products'] = Product::latest()->take(8)->get();
        // $data['categories'] = Category::whereNull('category_id')->whereNull('subcategory_id')->latest()->get();
        return view('index',$data);
    }


  //All products from Category and/or Sub-category and/or Child-category (Go this page When click to Main Category)

  public function productSub_list(Request $request, $slug){
    
    $data['category'] = Category::with('products')->where('slug', $slug)->first();

    

    $child = [];
    


 


    $productslist = $data['category']->products;



    if($data['category']->products->count()>0){



      foreach($productslist as $product){


            array_push($child, [
            'title'=>$product->title,
            'description'=>$product->description,
            'image'=>$product->image,
            'price'=>$product->price,
            'discount' => $product->discount,
            'discounted_price' => $product->discounted_price,
            'sale_price' => $product->price - $product->discounted_price,
            'id' =>$product->id,          
            'slug' =>$product->slug,
        
            ]);
  
  
      }
    }




    foreach ($data['category']->child_category as $subcategories) {

      if($subcategories->products->count()>0){

        foreach ($subcategories->products as $product){


          array_push($child, [
            'title'=>$product->title,
            'description'=>$product->description,
            'image'=>$product->image,
            'price'=>$product->price,
            'discount' => $product->discount,
            'discounted_price' => $product->discounted_price,
            'sale_price' => $product->price - $product->discounted_price,
            'id' =>$product->id,          
            'slug' =>$product->slug,
        
            ]);

        

        }
      }
    foreach ($subcategories->child as $childcat) {

      if($childcat->products->count()>0){

        
        foreach ($childcat->products as $product){



          array_push($child, [
            'title'=>$product->title,
            'description'=>$product->description,
            'image'=>$product->image,
            'price'=>$product->price,
            'discount' => $product->discount,
            'discounted_price' => $product->discounted_price,
            'sale_price' => $product->price - $product->discounted_price,
            'id' =>$product->id,          
            'slug' =>$product->slug,
        
            ]);

 
      }

      }
      
      
    }
  
    }

    
    $data['products'] = $this->paginate($child,12,'',['path' => Paginator::resolveCurrentPath()]);


    
    return view('frontend.products.list',$data);

   }

//Products list of sub-category

public function productList($slug){

 $data['sub_category'] = Category::where('slug', $slug)->first();

 $child = [];


 if($data['sub_category']->products->count()>0){

  foreach($data['sub_category']->products as $product){


    array_push($child, [
      'title'=>$product->title,
      'description'=>$product->description ,
      'image'=>$product->image,
      'price'=>$product->price,
      'discount' => $product->discount,
      'discounted_price' => $product->discounted_price,
      'sale_price' => $product->price - $product->discounted_price,
      'id' =>$product->id,          
      'slug' =>$product->slug,
  
      ]);

  }

}


 foreach ($data['sub_category']->child as $childcat) {


if($childcat->products->count()>0){

  foreach ($childcat->products as $product){


    array_push($child, [
      'title'=>$product->title,
      'description'=>$product->description ,
      'image'=>$product->image,
      'price'=>$product->price,
      'discount' => $product->discount,
      'discounted_price' => $product->discounted_price,
      'sale_price' => $product->price - $product->discounted_price,
      'id' =>$product->id,          
      'slug' =>$product->slug,
  
      ]);
   
     
  }
}
}
$data['products'] = $this->paginate($child,12,'',['path' => Paginator::resolveCurrentPath()]);

 $data['child_categories'] =  $data['sub_category']->child()->paginate(10);
 return view('frontend.products.product_list',$data);
}
//List of Child-Category

public function productListChild($slug){

  $child = [];

  $data['child_category'] = Category::where('slug', $slug)->first();

  if($data['child_category']->products->count()>0){

    foreach ($data['child_category']->products as $product){


      array_push($child, [
        'title'=>$product->title,
        'description'=>$product->description,
        'image'=>$product->image,
        'price'=>$product->price,
        'discount' => $product->discount,
        'discounted_price' => $product->discounted_price,
        'sale_price' => $product->price - $product->discounted_price,
        'id' =>$product->id,          
        'slug' =>$product->slug,
    
        ]);


    }

  }

  $data['products'] = $this->paginate($child,12,'',['path' => Paginator::resolveCurrentPath()]);

  return view('frontend.products.products_list_from_child',$data);
 }


//Show Individual Product Info

public function productShow($slug){
  $data['product'] = Product::where('slug', $slug)->first();

  return view('frontend.products.show',$data);
 }

 //Featured Products

 public function featuredProducts(){
  $data['products'] = Product::whereNotNull('discount')->paginate(20);
  $data['title'] = "Feature Product List.";
  return view('frontend.products.title_product.title_product_list',$data);

 }


 //Best selling Products

 public function topProducts(){

  $data['products'] = Product::where('remaining_amount','>', 0)->latest()->paginate(20);
  $data['title'] = "Best Selling Product List.";
  return view('frontend.products.title_product.title_product_list',$data);

 }
 //New Products

 public function recentProducts(){
  $data['products'] = Product::latest()->paginate(20);
  $data['title'] = "New Product List.";
  return view('frontend.products.title_product.title_product_list',$data);

 }


//Custom Pagination

 public function paginate($items, $perPage = 5, $page = null, array $options = [])
 {
     $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
     $items = $items instanceof Collection ? $items : Collection::make($items);
     return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
 }

 public function filter_product(Request $request){
   
  $title = "Search Results.";
$searchTerm = $request->search;


 $products = Product::query()
   ->where('title', 'LIKE', "%{$searchTerm}%")
   ->paginate(20);

return view('frontend.products.title_product.title_product_list', compact('products','title'));

 }

 public function user_invoice($id){
  $order = Order::find($id);

  return view('frontend.invoice.invoice', compact('order'));
 }
}
