@extends('layouts.master')

@section('content')
	{{ Form::open(array('route' => 'sessions.store')) }}
		<div class="form-group">
			{{ Form::label('email', 'Email: ') }}		
			{{ Form::text('email', null, ['class' => 'form-control']) }}		
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Password: ') }}		
			{{ Form::password('password', ['class' => 'form-control']) }}		
		</div>
		<div class="form-group">	
			{{ Form::submit('login', ['class' => 'btn btn-primary']) }}		
		</div>
	{{ Form::close() }}
@stop