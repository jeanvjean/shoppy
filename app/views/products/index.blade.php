@extends('layouts.master')

@section('content')
	
<div class="">
	@foreach ($products as $product)
		<ul class="pull-left col-lg-4 list-group">		
			<li class="list-group-item"><h3><strong>{{ $product->title }}</strong></h3></li>
			<li class="list-group-item">{{ $product->description }}</li>
			<li class="list-group-item">${{ $product->price }}</li>
			<li class="list-group-item text-center">
				<div class="btn-group">			
					<button class="btn btn-success">Add To Cart</button>
					<button class="btn btn-danger">Product Info</button>
				</div>		
			</li>	
		</ul>
	@endforeach
</div>
@stop