<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\CartItem;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products') -> get();
        return view('home', [
            'products' => $products
            ]);
    }
    public function product(Request $request) {
        $products = DB::table('products') -> get();
        return view('product', [
            'products' => $products
        ]);
    }

    public function addToCartMen(Request $request) {
        $product_id = $request -> product_id;
        $product_name = $request -> product_name;
        $product_price = $request -> product_price;
        $quantity = $request -> quantity;
        $customer_id = Auth::user() -> id;
        $product_image = $request -> product_image;

        $product_if_exist = CartItem::where([
            ['product_id', $product_id],
            ['customer_id', $customer_id]
        ])->count();

        if ($product_if_exist == 1) {
            $increment_quantity = CartItem::where([
                ['product_id', $product_id],
                ['customer_id', $customer_id]
            ])->increment('quantity');

            Session::flash('success', $product_name. ' already in cart. Quantity increased.');
            return redirect ('/product');
        } else {
            $cart = new CartItem;
            $cart -> product_id = $product_id;
            $cart -> product_name = $product_name;
            $cart -> product_price = $product_price;
            $cart -> quantity = $quantity;
            $cart -> customer_id = $customer_id;
            $cart -> product_image = $product_image;
            $cart -> save();

            Session::flash('success', $product_name.' added to your cart!');
            return redirect ('/product');
        }
    }

    public function item(Request $request) {
    return view('item');
    }
}
