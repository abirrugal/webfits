<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    function userProfile($user){
        if(auth()->user()){
            $data['user']  = auth()->user(); 
        }
       
       return view('frontend.user.profile',$data);
    }
    function userOrders($user){
        if(auth()->user()){
        $data['orders'] = Order::where('user_id', auth()->user()->id)->latest()->paginate(10);
        }
       return view('frontend.user.orders',$data);
    }

    public function userProfileEdit($id){

        $user = User::find($id);

        return view('frontend.user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id){

        $user = User::find($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4|max:255',
            // 'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required',
            'password' => 'required|min:4'

        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput()->withInput();
        }

        $user->update([
            'name' => $request->name,
            // 'email' => $request->email,
            'phone_number' => trim($request->phone),
            'password' => Hash::make($request->password),
        ]);

      $this->successMessage('Profile Update Success.');
      return redirect()->back();


    }

    public function orderDetails($id){

        $order = Order::latest()->get();
        return view('frontend.user.order_details', compact('order'));
    }

}
