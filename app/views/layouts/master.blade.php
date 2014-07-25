<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop Here Mah Fucka!</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
	<script src="//http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style type="text/css">
		.cart {
			padding-left: 25px;					
		}
	</style>
</head>
<body>
<div class="wrapper col-lg-9 col-lg-offset-1">
	<div class="jumbotron">
		<h1>Welcome to The Shop</h1>
		<h3>Please browse around</h3>
		@if (!Auth::guest())
			<a href="{{ URL::to('/' . Auth::user()->id . '/cart') }}" class="pull-right cart"><button class="btn btn-success btn-lg">View Your Cart</button></a>
		@endif	
		<a href="{{ URL::to('/usercreate') }}"><button class="btn-lg btn-primary">Sign Up To Purchase</button></a>
		@if (Auth::guest())
			<a href="{{ URL::to('/login') }}"><button class="btn-lg btn-primary pull-right">Log In</button></a>
		@else 
			<a href="{{ URL::to('/logout') }}"><button class="btn-lg btn-primary pull-right">Log Out</button></a>
		@endif
	</div>
	@yield('content')	
</div>
</body>
</html>