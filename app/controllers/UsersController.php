<?php

class UsersController extends \BaseController {


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;

		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		$cart = new Cart;

		$cart->user_id = $user->id;
		$cart->save();

		$input = Input::only('email', 'password');

		if (Auth::attempt($input)) {
			return Redirect::to('/products');
		}	
		else {
			return Redirect::to('/');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

}
