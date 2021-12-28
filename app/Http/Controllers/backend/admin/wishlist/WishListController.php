<?php

namespace App\Http\Controllers\backend\admin\wishlist;

use App\Http\Controllers\Controller;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class WishListController extends Controller
{
        
//wishList 
public function wishList(){

  if(Auth::check()){
    $wish_lists = WishList::where('user_id', auth()->user()->id )->get();

  }
 
    return view('frontend.wishlist.index', compact('wish_lists'));
 
     }



 
 //Create wishList 
  public function create_wishlist($id){
      
    $user_id = Auth::id();
    $check = DB::table('wish_lists')->where('user_id', $user_id)->where('product_id', $id)->first();

    $data = [
    'user_id' => $user_id,
    'product_id' => $id,
    ];

    if(Auth::Check()){



if($check){

 return response()->json(['error' => 'Product already has on your wishlist.']);
    
}else{
    WishList::create($data);


  $wish_list_count = WishList::where('user_id', auth()->user()->id )->get();
  $wish_list_count = $wish_list_count->count();

  return  response()->json($wish_list_count);
  
  // return  response()->json(['success' => 'Product added to wishlist success.']);

}

    }else{
 

      return  response()->json(['error' => 'Please Login First']);

    }
    
  }

  public function wishlist_delete($id){

    
    $wish_list = WishList::find($id);
    if(Auth::check() && auth()->user()->id == $wish_list->user_id){
    $wish_list->delete();
    $this->successMessage("Removed Success");
    }else{
      $this->errorMessage("Permission Denied.");
    }
    
    return redirect()->back();

  }



 

}
