<?php

namespace App\Http\Controllers;
use App\CartItem;
use Auth;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
	public function addToCart(Request $request) {
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
			return redirect ('/home');
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
			return redirect ('/home');
		}
	}
	
	public function showCart(Request $request) {
		$customer_id = Auth::user()->id;
		$products = DB::table('cart_items') -> where('customer_id', $customer_id) -> get();

		return view ('cart', [
			'products' => $products
		]);
	}

	public function deleteToCart(Request $request) {
		$product_id = $request -> product_id;
		$customer_id = Auth::user() -> id;

		$delete = DB::table('cart_items')->where([
			['product_id', '=', $product_id],
			['customer_id', '=', $customer_id]
		])->delete();

		return redirect ('/home/showCart');
	}

	public function updateToCart(Request $request) {
		$product_id = $request -> product_id;
		$quantity = $request -> quantity;
		$customer_id = Auth::user()->id;

		$update = DB::table('cart_items')->where([
			['product_id', '=', $product_id],
			['customer_id', '=', $customer_id]
		])->update(['quantity' => $quantity]);

		return redirect ('/home/showCart');
	}
}
