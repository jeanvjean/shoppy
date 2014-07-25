<?php

class CartsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$cart = Cart::find($id);
		$user = User::whereId($id)->first();

		return View::make('users.cart', compact('user', 'cart'));
	}

	public function addProductToCart($id)
		{
			if (Auth::guest()) {
				return Redirect::to('/login');
			}
			else {
				$product = Product::whereId($id)->first();
				$user = Auth::user();
				$cart = $user->cart;
				$product->save();
				$product->cart()->save($cart);

				return Redirect::to('/products');
			}
		}
}
