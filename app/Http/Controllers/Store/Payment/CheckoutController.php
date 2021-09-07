<?php

namespace App\Http\Controllers\Store\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function getCheckOutView(){
       if ($this->safeToCheckOut() === true){
          return view('store.payment.checkout');
       }else{
           return $this->safeToCheckOut();
       }
    }

    public function checkout(Request $request){
        if ($this->safeToCheckOut() === true){

            $order = new Order();

            $order['code'] = '#'.Str::random(4).time();

            $order['user_id'] = Auth::guard('web')->user()->id;

//            $order['address_id'] = Auth::guard('web')->user()->address->id;

            $order['address_id'] = $request['user_address'];


            $order['subtotal'] = Auth::guard('web')->user()->cartCount();

        try {
            $order->save();
        }catch (\Exception $e){
            return redirect()->route('store.index')->with('danger' , 'something went wrong contact our support team!!');
        }

            foreach(Auth::guard('web')->user()->cart as $product) {
                $order->products()->attach($product->id, [
                    'quantity' => $product->pivot->quantity,
                    'price' => $product->price,
                    'total' => $product->pivot->quantity * $product->price
                ]);
                $product->decrement('quantity', $product->pivot->quantity);
            }

            Auth::guard('web')->user()->cart()->detach();

            return redirect()->route('store.index')->with('message' , 'thanks your order will be delivered soon!!');
        }else{
            return $this->safeToCheckOut();
        }
    }




    private function safeToCheckOut(){
        if (count(Auth::user()->address) <= 0){
            return redirect()->route('store.auth.edit')
                ->with("message" , 'create new shipping Address');
        }
        if (count(Auth::user()->cart) > 0 && count(Auth::user()->address) > 0) {
            foreach (Auth::user()->cart as $product) {
                if ($product->quantity === 0) {
                    return redirect()->route('store.index')
                        ->with("message" ,'product '.$product->product_en->title.' is out of stock');
                }
                if ($product->pivot->quantity > $product->quantity) {
                    return redirect()->route('store.index')
                        ->with("message" ,'product '.$product->product_en->title.' has only '.$product->quantity.' items available');
                }
            }
            return true;
        }
        return redirect()->route('store.index')->with("message" , 'shopping cart is empty!!');
    }
}
