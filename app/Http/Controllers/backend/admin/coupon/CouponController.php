<?php

namespace App\Http\Controllers\backend\admin\coupon;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    public function coupon(){
        $coupons = DB::table('coupons')->paginate(20);
        return view('backend.coupon.index', compact('coupons'));
    }


    public function create_coupon(){

        return view('backend.coupon.new');
    }

    public function store_coupon(Request $request){

        $validator = Validator::make($request->all(), [
            'coupon'                => 'required',
            'discount'                => 'required',
            'coupon_sts' => 'required',
            
         ]);

         if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Coupon::create([
            'coupon' => $request->coupon,
            'discount' => $request->discount,
            'coupon_sts' => $request->coupon_sts,
        ]);

        $this->successMessage('Created success');
        return redirect()->back();
    }

    public function edit_coupon($id){

        $coupon = Coupon::find($id);

        return view('backend.coupon.edit', compact('coupon'));
    }



    public function update_coupon(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'coupon'                => 'required',
            'discount'                => 'required',
            
         ]);

           Coupon::find($id)->update([

            'coupon' => $request->coupon,
            'discount' => $request->discount,
            'coupon_sts' => $request->coupon_sts,


         ]);

         $this->successMessage('Updated success');
         return redirect()->back();


    }

    public function delete_coupon($id){

        $coupon = Coupon::find($id);
        $coupon->delete();

        $this->successMessage('Deleted success');
        return redirect()->back();

    }

    public function apply_coupon(Request $request){

        $coupon = $request->coupon;
        
        $check = DB::table('coupons')->where('coupon', $coupon)->first();

        if($check){

            if ($check->coupon_sts === 'percent') {




            $data['cart'] = session('cart')? session('cart'):[];
            $totalPrice = array_sum(array_column($data['cart'],'total_price'));

    
    
            $percentage_discount = $check->discount;
        
        $discount_value = ($totalPrice / 100) * $percentage_discount;
        $discount_value = (int)$discount_value;
      

            
            Session::put('coupon', [
               'name' => $check->coupon,
               'discount' =>$percentage_discount . '%',
               'balance' => $totalPrice - $discount_value,

            ]);
           $this->successMessage('Coupon applied success.');
            return redirect()->back();
                
            }else{

                $data['cart'] = session('cart')? session('cart'):[];
                $totalPrice = array_sum(array_column($data['cart'],'total_price'));
                
                Session::put('coupon', [
                   'name' => $check->coupon,
                   'discount' =>$check->discount,
                   'balance' => $totalPrice - $check->discount,
    
                ]);
               $this->successMessage('Coupon applied success.');
                return redirect()->back();
                
            }

   
        }
        
        
        else{
            $this->successMessage('Invalid coupon.');
            return redirect()->back();
        }

    }

 

    public function apply_coupon_percentage(Request $request){

        $coupon = $request->coupon;
        
        $check = DB::table('coupons')->where('coupon', $coupon)->first();

        if($check){

            $data['cart'] = session('cart')? session('cart'):[];
            $totalPrice = array_sum(array_column($data['cart'],'total_price'));
            
            Session::put('coupon', [
               'name' => $check->coupon,
               'discount' =>$check->discount,
               'balance' => $totalPrice - $check->discount,

            ]);
           $this->successMessage('Coupon applied success.');
            return redirect()->back();
        }else{
            $this->successMessage('Invalid coupon.');
            return redirect()->back();
        }

    }

    public function remove_coupon(){
        session()->forget('coupon');
        $this->successMessage('Promo code removed.');
        return redirect()->back();
    }
}
