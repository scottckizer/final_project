@extends('layout')

@section('main')

@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="hero">
    <div class="large_photo_border">
        <img src="/images/rider_cropped.jpg">
    </div>
</div>

<form class="primary_section log_in" role="form" method="POST" action="{{ url('/auth/login') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<section>

		<div>
	        <h4>E-mail:</h4>
		    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
		</div>

		<div>
	        <h4>Password:</h4>
		    <input type="password" name="password" placeholder="Password">
		</div> 

		<button type="submit">
			Log In
		</button>

        <h6>Forgot your E-mail or Password?</h6>

	</section>
</form>
				
@endsection