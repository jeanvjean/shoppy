@extends('layouts.master')

@section('content')
	<h1>{{ $user->email }}, here's your cart</h1>
	@foreach ($cart->product as $product)
		<h3>{{ $product->title }}</h3>
		<h3>{{ $product->description }}</h3>
		<h3>{{ $product->price }}</h3>
	@endforeach
@stop