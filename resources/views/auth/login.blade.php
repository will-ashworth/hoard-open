@extends('layouts.master')

@section('title', 'hoard')

@section('content')

<div id="inline-container">
	<form method="POST" action="{!! action('Auth\AuthController@postLogin') !!}">
	    {!! csrf_field() !!}
	    
	    
		@if (count($errors) > 0)
		    <ul>
		        @foreach ($errors->all() as $error)
		            <li>{{ $error }}</li>
		        @endforeach
		    </ul>
		@endif
	
	    <div>
	        Email
	        <input type="email" name="email" value="{{ old('email') }}">
	    </div>
	
	    <div>
	        Password
	        <input type="password" name="password" id="password">
	    </div>
	
	    <div>
	        <input type="checkbox" name="remember"> Remember Me
	    </div>
	
	    <div>
	        <button type="submit">Login</button>
	    </div>
	</form>
</div>
@endsection