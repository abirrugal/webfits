<?php
namespace App\Http\Controllers\backend\admin\orders;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class OrdersController extends Controller
{
    public function orders(){

        $data['orders'] = Order::with('orderProducts')->where('operational_status','pending')->latest()->paginate(20);
   
        return view('backend.orders.orders', $data);
    }


//Show Orders

public function orderShow($id){
    $order = Order::with('orderProducts','customer')->findOrFail($id);
    
    return view('backend.orders.show',['order'=>$order]);
}


//Delete Order

public function orderDelete(Request $request , $id){

$order = Order::find($id);

$order->delete();

session()->flash('type','success');
session()->flash('message','Order deleted success');
return redirect()->back();

}

 

// Delever Order Status 
public function DeleverOrderSts(Request $request,$id){

   
    if($request->order_sts !==null && $request->order_sts !== '' && $request->order_sts !=='delivered'){
        $order = Order::find($id);
        $order->operational_status = $request->order_sts;
        $order->save();
        session()->flash('type','success');
        session()->flash('message','Payment Status changed success');
        return redirect()->back();
    }else if($request->order_sts ==='delivered'){
        $order = Order::find($id);   

      

        foreach ($order->orderProducts as $orderProduct) {

          
            $total_quantity = $orderProduct->quantity + $orderProduct->product->sale_amount;

        
            $orderProduct->product()->update(
                [
                    'sale_amount' => $total_quantity,
                ]
            );

           $remaining = $orderProduct->product->stock_amount - $total_quantity;

            $orderProduct->product()->update(
                [
                    'remaining_amount' => $remaining,
                ]
            );

                
        }


$order->operational_status = $request->order_sts;
$order->save();
      session()->flash('type','success');
        session()->flash('message','Payment Status changed success');
        return redirect()->back();  
    }
    
}

// Payment Order Status
public function PaymentOrderSts(Request $request,$id){

    $order = Order::find($id);
    if($request->order_sts !==null && $request->order_sts !== ''){
        $order->payment_status = $request->order_sts;
        $order->save();
        session()->flash('type','success');
        session()->flash('message','Payment Status changed success');
        return redirect()->back();
    }

    
}

public function payment_confirm(){

    return view('frontend.order.confirm_payment');
}

public function order_invoice($id){
    $order = Order::find($id);

    return view('backend.orders.invoice', compact('order'));
}


public function completed_order(){
    

        $data['orders'] = Order::with('orderProducts')->where('operational_status','delivered')->latest()->paginate(20);
   
        return view('backend.orders.completed', $data);
    

}

public function processing_order(){
    

    $data['orders'] = Order::with('orderProducts')->where('operational_status','processing')->latest()->paginate(20);

    return view('backend.orders.processing', $data);


}
public function cancel_order(){
    

    $data['orders'] = Order::with('orderProducts')->where('operational_status','cancel')->latest()->paginate(20);

    return view('backend.orders.cancel', $data);


}




}
