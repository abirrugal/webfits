<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\District;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
class CartController extends Controller
{

    public function cartIndex(){
// session()->flush();

$data['totalPrice'] = $this->totalCartPriceCount();
$data['totalProducts'] = $this->totalCartQuantityCount();


        return view('frontend.cart.index', $data);
    }

    // Cart show item 

    public function show_items($id){

       $data['product']  = Product::find($id);
        return view('frontend.products.show', $data);

    }

    // =========================
    // =   Add cart to list   =
    // =========================

    public function cartStore(Request $request){

    try{

        $this->validate($request, [
            'product_id' => 'required|numeric',
            
            
        ]);

    }catch(ValidationException $e){
       
        return redirect()->back();
    }
    $product = Product::findOrFail($request->product_id);
    $price=($product->sale_price !== null && $product->sale_price >0) ? $product->sale_price : $product->price;
    $image = $product->image;
    // $image = $product->image;

//First we get session data and put it to $cart variable [get cart products]

$cart = session()->get('cart');
       
//If $cart is empty mean there is no product in cart then we will add requested product. [Add new product if cart empty]

if(!$cart) {
    
    if (isset($request->quantity_show)) {

        $quantity = $request->quantity_show;
        $total_price = $quantity * $price;
       

        if(session('coupon')){



            $cart[$product->id] = [
                'title' => $product->title,
                'quantity' => $request->quantity_show,
                'color' => $request->color,
                'size' => $request->size,
                'image'   => $image,
                'price' => $price, 
                'additional_cost' => $product->shipping_cost, 
                'total_price' => $total_price, 
                'coupon_name' => session('coupon')['name'],
                'discount' => session('coupon')['discount'],
                
            ];

        }else{

            $cart[$product->id] = [
                'title' => $product->title,
                'quantity' => $request->quantity_show,
                'color' => $request->color,
                'size' => $request->size,
                'image'   => $image,
                'price' => $price, 
                'additional_cost' => $product->shipping_cost, 
                'total_price' => $total_price, 
                'coupon_name' => "No Coupon",
                'discount' => 0,
                
            ];
        }
        
  
    }


    else{


        if(session('coupon')){

            $cart[$product->id] = [
                'title' => $product->title,
                'quantity' => 1,
                'color' => $request->color,
                'size' => $request->size,
                'image'   => $image,
                'price' => $price, 
                'total_price' => $price, 
                'additional_cost' => $product->shipping_cost, 
                'coupon_name' => session('coupon')['name'],
                'discount' => session('coupon')['discount'],
                
            ];

        }else{

            $cart[$product->id] = [
                'title' => $product->title,
                'quantity' => 1,
                'color' => $request->color,
                'size' => $request->size,
                'image'   => $image,
                'price' => $price, 
                'additional_cost' => $product->shipping_cost, 
                'total_price' => $price,
                'coupon_name' => "No Coupon",
                'discount' => 0,
                
            ];
        }


    }
    
    session(['cart' => $cart]);
  
    $totalProducts = $this->totalCartQuantityCount();
    $productTitle = $cart[$product->id]['title'];
    $productImage = $cart[$product->id]['image'];
    $productTotalPrice = $cart[$product->id]['total_price'];
    $total = $this->totalCartPriceCount();

//Here we return user to cart index page, We use return keyword So it will stop here and not go secound if statement.[return to cart list]

    // return redirect()->back()->with('success','Item added to cart');

    return response()->json(['status'=>'success','total'=>$total, 'totalProducts'=>$totalProducts,'productTitle'=>$productTitle, 'productImage'=>$productImage, 'productTotalPrice'=>$productTotalPrice]);

}

//If cart's have a same item which we added before we need to increment quantity of that product, 
//So we check if the product already in cart if is it then increment it by 1.

    if(isset($cart[$product->id])) {

        if (isset($request->quantity_show)) {
            $cart[$product->id]['quantity']+= $request->quantity_show;

            $cart[$product->id]['total_price'] = $cart[$product->id]['quantity'] * $cart[$product->id]['price'];
        }else{

        $cart[$product->id]['quantity']++;
        $cart[$product->id]['total_price'] = $cart[$product->id]['quantity'] * $cart[$product->id]['price'];

        }

        session(['cart' => $cart]);
        $productTitle = $cart[$product->id]['title'];
        $productImage = $cart[$product->id]['image'];
        $productTotalPrice = $cart[$product->id]['total_price'];

        $totalProducts = $this->totalCartQuantityCount();
        $total = $this->totalCartPriceCount();

        return response()->json(['status'=>'success', 'total'=>$total,'totalProducts'=>$totalProducts,'productTitle'=>$productTitle, 'productImage'=>$productImage, 'productTotalPrice'=>$productTotalPrice]);

    //    return response()->json(['status'=>'success', 'message'=>'Items added to the cart']);

   
//Here we return user to cart index page, We use return keyword So it will stop here and not go secound if statement.[return to cart list]

        // return redirect()->back()->with('success', $product->title. 'Item added to cart');
    }

//If cart is not empty and cart has duplicate product we well add a new product. [mean there is a single product and also duplicate product]

if (isset($request->quantity_show)) {


       $quantity = $request->quantity_show;
        $total_price = $quantity * $price;

    if(session('coupon')){

        $cart[$product->id] = [
            'title' => $product->title,
            'quantity' => $request->quantity_show,
            'image'   => $image,
            'color' => $request->color,
            'size' => $request->size,
            'price' => $price, 
            'additional_cost' => $product->shipping_cost, 
            'total_price' => $total_price, 
            'coupon_name' => session('coupon')['name'],
            'discount' => session('coupon')['discount'],
            
        ];

    }else{


        $cart[$product->id] = [
            'title' => $product->title,
            'quantity' => $request->quantity_show,
            'image'   => $image,
            'price' => $price, 
            'additional_cost' => $product->shipping_cost, 
            'color' => $request->color,
            'size' => $request->size,
            'total_price' => $total_price,
            'coupon_name' => "No Coupon",
            'discount' => 0,
         ];

    }



}

else{


    if(session('coupon')){

        $cart[$product->id] = [
            'title' => $product->title,
            'quantity' => 1,
            'color' => $request->color,
            'size' => $request->size,
            'image'   => $image,
            'price' => $price, 
            'additional_cost' => $product->shipping_cost, 
            'total_price' => $price, 
            'coupon_name' => session('coupon')['name'],
            'discount' => session('coupon')['discount'],
            
        ];

    }else{

        $cart[$product->id] = [
            'title' => $product->title,
            'quantity' => 1,
            'color' => $request->color,
            'size' => $request->size,
            'image'   => $image,
            'price' => $price, 
            'additional_cost' => $product->shipping_cost, 
            'total_price' => $price,
            'coupon_name' => "No Coupon",
            'discount' => 0,
         ];

    }


}
    session(['cart' => $cart]);
    $totalProducts = $this->totalCartQuantityCount();
    $productTitle = $cart[$product->id]['title'];
    $productImage = $cart[$product->id]['image'];
    $productTotalPrice = $cart[$product->id]['total_price'];

    $totalProducts = $this->totalCartQuantityCount();
    $total = $this->totalCartPriceCount();

    return response()->json(['status'=>'success', 'total'=>$total,'totalProducts'=>$totalProducts,'productTitle'=>$productTitle, 'productImage'=>$productImage, 'productTotalPrice'=>$productTotalPrice]);
//Here we return user to cart index page, We use return keyword So it will stop here and not go secound if statement.[return to cart list]     
    // return redirect()->back()->with('success', $product->title. ' added to cart');

}

    // =========================
    // =Change items quantity =
    // =========================

    public function changeQty(Request $request){

        $id = $request->id;
        $product = Product::findOrFail($id)->find($id);

        $cart = session()->get('cart');
      if ($request->change_to === 'down') {
          if(isset($cart[$product->id])) {
            if($cart[$product->id]['quantity'] > 1){

                $cart[$product->id]['quantity']--;
                $cart[$product->id]['total_price'] = $cart[$product->id]['quantity'] * $cart[$product->id]['price'];

                session(['cart' => $cart]);

               $totalProducts = $this->totalCartQuantityCount();
               $totalPrice = $this->totalCartPriceCount();
               $quantity = $cart[$product->id]['quantity'];
               $price = $cart[$product->id]['price'];
            
                return response()->json(['status'=>'success', 'message'=>'Quantity increased', 'data' => ['totalProducts' => $totalProducts, 'totalPrice'=> $totalPrice, 'quantity'=>$quantity , 'price'=>$price]]);

            }else{

                unset($cart[request()->product_id]);
                session()->put('cart', $cart);
                
                Session::save();      
               
               return redirect()->back()->with('success', 'Item removed success');
                 
                return redirect()->back();
            }
          }else {
              return back();
          }
          
      }else{

        if(isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
            $cart[$product->id]['total_price'] = $cart[$product->id]['quantity'] * $cart[$product->id]['price'];

            session(['cart' => $cart]);

            $totalProducts = $this->totalCartQuantityCount();
            $totalPrice = $this->totalCartPriceCount();
            $quantity = $cart[$product->id]['quantity'];
            $price = $cart[$product->id]['price'];
         
             return response()->json(['status'=>'success', 'message'=>'Quantity increased', 'data' => ['totalProducts' => $totalProducts, 'totalPrice'=> $totalPrice, 'quantity'=>$quantity , 'price'=>$price]]);

        }else{
            return back();
        }

      }
    }

    // =========================
    // =Destroy item from cart =
    // =========================
    
    function cartDestroy(Request $request , $id){
        $cart = session('cart') ?  session('cart') : []; 
        unset($cart[$id]);
        session()->put('cart', $cart); 
        Session::save(); 
       return redirect()->back()->with('success', 'Item removed success');
    }

       // =========================
       // =    Clear all cart     =
       // =========================

        public function cartClear(){

            session()->put('cart',[]);
            $this->successMessage('All carts are cleared');
            return redirect()->back();
        }

       // =========================
       // =    Checkout Page      =
       // =========================

    public function checkout(){
        $data=[];
        $data['cart'] = session('cart')? session('cart'):[];
        $data['totalPrice'] = array_sum(array_column($data['cart'],'total_price'));
        $data['totalProducts'] = array_sum(array_column($data['cart'],'quantity'));
        $data['districts'] = District::all(); 
        $data['areas'] = Area::all(); 
        return view('frontend.cart.checkout', $data);
    }

           // =========================
       // =   Buy now Checkout Page      =
       // =========================

       public function buy_now(Request $request, $id){ 
        if(isset($id)){

            $product = Product::find($id);
            $total = ($product->sale_price !== null && $product->sale_price >0) ? $product->sale_price : $product->price;
                
        }

        $data['districts'] = District::all(); 
        $data['areas'] = Area::all(); 

         $data=[];
            $data['totalPrice'] = $total;
            $data['totalProducts'] = 1;
            $data['id'] = $id;
     
        return view('frontend.cart.checkout',$data);
    }

       // =========================
       // =    Order logic        =
       // =========================

    public function orderProcess(Request $request){



        $validate = Validator::make($request->all(), [

            'name' => 'required',
            'phone' => 'required|numeric|min:11',
            'address' => 'required',
            'postal_code'   => 'required|numeric',
            'city' => 'required',
            'area' => 'required'
        ]);
    
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
     
        
        $area_id = $request->area;

        $area = Area::find($area_id);
        $area_price = $area->price;

$id = $request->id;
if(isset($id)){
    $product = Product::find($id);
    $total = ($product->sale_price !== null && $product->sale_price >0) ? $product->sale_price : $product->price;
        
    $cart = [
        'quantity' => 1,
        'price' => $total,  
        'total_price' => $total + $area_price,
        'additional_cost' => $product->shipping_cost, 

    ];

}else if(session('cart')){
    $cart = session('cart')? session('cart'):[];
    $total = array_sum(array_column($cart,'total_price')); 
    $total_additional = array_sum(array_column($cart,'additional_cost'));
    
  
}

if($total){




    if($request->pay_number !== null && $request->trans !== null){

        $payment_number = $request->pay_number;
        $trans_id = $request->trans;
    }else 
    
    if($request->pay_number_rocket !== null && $request->trans_rocket !== null){

        $payment_number = $request->pay_number_rocket;
        $trans_id = $request->trans_rocket;

    }else{

        $payment_number = $request->pay_number_nagad;
        $trans_id = $request->trans_nagad;
    }


$order =  Order::create([ 

        'user_id' => Auth::user()->id,
        'customer_name' => $request->name,
        'customer_phone_number' => $request->phone,
        'address' => $request->address,
        'city' => $request->city,
        'postal_code' => $request->postal_code,
        'total_amount' => $total + $area_price,
        'paid_amount' => $total,
        'shipping_cost' => $area_price,
        'additional_cost' => $total_additional,
        'payment_details' => $request->pay,
        'payment_number' => $payment_number,
        'trans_id' => $trans_id,

    ]);

    if(isset($id)){


        if(session('coupon')){

            $order->orderProducts()->create([
                'product_id' => $id,
                'quantity'   => $cart['quantity'],
                'price'      => session('coupon')['balance'], 
                'color'      => $cart['color'],
                'size'      => $cart['size'],
                'additional_cost' => $cart['additional_cost'],
                'coupon_name' => session('coupon')['name'],
                'discount' => session('coupon')['discount'],

            ]);
        }
        
        else{

            $order->orderProducts()->create([
                'product_id' => $id,
                'quantity'   => $cart['quantity'],
                'price'      => $cart['total_price'], 
                'color'      => $cart['color'],
                'size'      => $cart['size'],
                'additional_cost' => $cart['additional_cost'],
                'coupon_name' => "No Coupon", 
                'discount' => 0, 

            ]);
        }
   
   
    }else{


        if(session('coupon')){

            foreach ($cart as $product_id => $product){

            $order->orderProducts()->create([
                'product_id' => $product_id,
                'quantity'   => $product['quantity'],
                'price'      => session('coupon')['balance'], 
                'color'      => $product['color'],
                'size'      => $product['size'],
                'coupon_name' => session('coupon')['name'],
                'additional_cost' => $product['additional_cost'],
                'discount' => session('coupon')['discount'],

            ]);
        }


        }else{

            foreach ($cart as $product_id => $product){

                $order->orderProducts()->create([
                    'product_id' => $product_id,
                    'quantity'   => $product['quantity'],
                    'price'      => $product['total_price'],
                    'color'      => $product['color'],
                    'size'      => $product['size'],
                    'coupon_name' => 'No Coupon',
                    'additional_cost' => $product['additional_cost'],
                    'discount' => 0,
                ]);
            }

        }



    }
if(isset($id)){
}else if (session('cart')) {
        session()->forget('cart', 'total');
}
if(session('coupon')){
    session()->forget('coupon');

}

    $this->successMessage('Order Created');
    return redirect()->route('frontend.user.orders', auth()->user()->name);
}
$this->errorMessage('Your cart is empty. Please add some product to your cart first.');
return redirect()->back();
       
    }
    }