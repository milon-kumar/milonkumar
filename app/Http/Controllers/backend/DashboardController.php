<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Toaster;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard.dashboard');
    }

    public function getProducts()
    {
        return view('product',[
            'products'=>Product::all(),
        ]);
    }

    public function addToCart(Request $request)
    {

//        return $request;
//        exit();
        $product = Product::findOrFail($request->id);

        $rowId = rand(11111,99999);
        \Cart::add([
            'id'=>$rowId,
            'name'=>$product->title,
            'price'=>$product->price,
            'quantity'=>$request->qty,
            'attributes'=>[
                'image'=>$product->image,
            ],
            'associatedModel'=>$product,
        ]);

        return redirect()->back()->with('success','Add To Cart Success');
    }

    public function getCartProduct()
    {
        return view('cart_products',[
            'carts'=>\Cart::getContent(),
        ]);
    }
}
