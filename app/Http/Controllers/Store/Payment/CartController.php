<?php

namespace App\Http\Controllers\Store\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartView(){
        return view('store.payment.cart');
    }

    public function cartAdd(Request $request){
        $request->validate([
            'quantity' => 'required|numeric|integer|min:0|not_in:0',
        ]);

        $add = false;
        $product = Product::where('code' , $request['code'])->first();
        $product->load('product_en');

        if (!Auth::user()->cart->contains($product->id)) {
            Auth::user()->cart()->attach($product->id, ['quantity' => $request['quantity']]);
            $add = true;
        }

        return response()->json([
            'add' => $add
        ]);
    }

    public function cartRemove(Request $request){
        $product = Product::where('code' , $request['code'])->first();
        Auth::user()->cart()->detach($product->id);
        return response()->json([
            'message' => 'everything is fine.'
        ]);
    }

    public function cartAll(){
        $products = Auth::user()->cart()->with('product_en')->get();

        return response()->json([
            'products' => $products
        ]);
    }

    public function cartIncrement(Request $request){
        $request->validate([
            'quantity' => 'required|numeric|integer|min:0|not_in:0',
        ]);

        $product = Product::where('code' , $request['code'])->first();

        if (!Auth::user()->cart->contains($product->id)) {
            Auth::user()->cart()->attach($product->id, ['quantity' => $request['quantity']]);
        }else {
            Auth::user()->cart()->detach($product->id);
            Auth::user()->cart()->attach($product->id, ['quantity' => $request['quantity']]);
        }
    }

    public function getCartTotal(){
        return response()->json([
            'total' => auth()->user()->cartCount(),
        ]);
    }
}
