<?php

namespace App\Http\Controllers\backend\admin\compare;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompareController extends Controller
{
    public function compare(){

        return view('frontend.compare.compare');

    }

    public function compare_logic($id){
        $product = Product::findOrFail($id);
        $price=($product->sale_price !== null && $product->sale_price >0) ? $product->sale_price : $product->price;
        $image = $product->image;



        $compare = session()->get('compare');



        $compare[$product->id] = [
            'title' => $product->title,
            'image'   => $image,
            'description' => $product->description, 
            'price' => $price, 
            'slug' =>$product->slug,
                    
        ];

        session(['compare' => $compare]);

        return response()->json("Product added to compare success.");
        // return redirect()->back();


    }

    public function compare_delete($id){
        $compare = session('compare') ?  session('compare') : []; 
        unset($compare[$id]);
        session()->put('compare', $compare); 
        Session::save(); 
        $this->successMessage('Item removed success');
       return redirect()->back();
    }

    public function compare_clear(){

        
        session()->put('compare',[]);
        $this->successMessage('All compare items are cleared');
        return redirect()->back();
    }


}
