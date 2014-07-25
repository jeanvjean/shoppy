@extends('layouts.master')

@section('content')
	
	@if (!Auth::guest())
		<h1>Welcome, {{ $loggedInUser->email }} you have a cart.</h1>
	@else 
		<h1>Please Login or Signup!</h1>
	@endif
<div>
	@foreach ($products as $product)
		<ul class="pull-left col-lg-4 list-group">		
			<li class="list-group-item"><h3><strong>{{ $product->title }}</strong></h3></li>
			<li class="list-group-item">{{ $product->description }}</li>
			<li class="list-group-item">${{ $product->price }}</li>
			<li class="list-group-item text-center">
				<div class="btn-group">			
					<button class="btn btn-success">{{ HTML::linkAction('CartsController@addProductToCart', 'Add To Cart', array($product->id)) }}</button>
					<button class="btn btn-danger">Product Info</button>
				</div>		
			</li>	
		</ul>
	@endforeach
</div>
@stop