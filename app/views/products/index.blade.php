@extends('layouts.master')

@section('content')
	
<div class="">
	@foreach ($products as $product)
		<ul class="pull-left col-lg-4 list-group">		
			<li class="list-group-item"><h3><strong>{{ $product->title }}</strong></h3></li>
			<li class="list-group-item">{{ $product->description }}</li>
			<li class="list-group-item">${{ $product->price }}</li>
			<li class="list-group-item"><button class="btn-success">Add To Cart</button></li>
		</ul>
	@endforeach
</div>
@stop