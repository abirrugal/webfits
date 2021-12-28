<?php

namespace App\Http\Controllers\frontend\title_category;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\TitleCategory;
use Illuminate\Http\Request;

class TitleCategoryController extends Controller
{
    public function premium_products(){
        $products = Product::where('premium','premium')->paginate(20);
        
        $title = "Gift Items.";

        return view('frontend.products.title_product.title_product_list' , compact('products','title'));
    }


    
    public function comfort_products(){
        $products = Product::where('comfort','comfort')->paginate(20);
        $title = TitleCategory::where('status','Ecustomize Comfort')->first();
        return view('frontend.products.title_product.title_product_list' , compact('products','title'));
    }


    public function decor_dining_products(){
        $products = Product::where('decor_dining','decor_dining')->paginate(20);
        $title = TitleCategory::where('status','Decor Your Dining Room')->first();
        return view('frontend.products.title_product.title_product_list' , compact('products','title'));
    }


    public function bedroom_products(){
        $products = Product::where('bedroom','bedroom')->paginate(20);
        $title = TitleCategory::where('status','Bed Room')->first();
        return view('frontend.products.title_product.title_product_list' , compact('products','title'));
    }

    public function comfy_bedding_products(){
        $products = Product::where('comfy_bedding','comfy_bedding')->paginate(20);
        $title = TitleCategory::where('status','Comfy Bedding')->first();
        return view('frontend.products.title_product.title_product_list' , compact('products','title'));
    }

}
