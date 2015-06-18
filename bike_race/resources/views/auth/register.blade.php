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
        <!-- <div class="large_photo"></div> -->
        <img src="/images/rider_cropped.jpg">
    </div>
</div>

<form class="primary_section register" role="form" method="POST" action="{{ url('/auth/register') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<section>
		<div class="input_photo">
			<a href="">
				<img src="">
				<p>Add Photo</p>
			</a>
		</div>

		{{-- <div class="form-group">
			<label class="col-md-4 control-label">First Name</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
			</div>
		</div> --}}

		<div>
			<h4>First Name:</h4>
			<input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
		</div>

		{{-- <div class="form-group">
			<label class="col-md-4 control-label">Last Name</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
			</div>
		</div> --}}

		<div>
	        <h4>Last Name:</h4>
		    <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
		</div>

		{{-- <div class="form-group">
			<label class="col-md-4 control-label">E-Mail Address</label>
			<div class="col-md-6">
				<input type="email" class="form-control" name="email" value="{{ old('email') }}">
			</div>
		</div> --}}

		<div>
			<h4>E-mail:</h4>
			<input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
		</div>

		{{-- <div class="form-group">
			<label class="col-md-4 control-label">Password</label>
			<div class="col-md-6">
				<input type="password" class="form-control" name="password">
			</div>
		</div> --}}

		<div>
			<h4>Password:</h4>
			<input type="password" name="password" placeholder="Password">
		</div>

		{{-- <div class="form-group">
			<label class="col-md-4 control-label">Confirm Password</label>
			<div class="col-md-6">
				<input type="password" class="form-control" name="password_confirmation">
			</div>
		</div> --}}

		<div>
			<h4>Confirm Password:</h4>
			<input type="password" name="password_confirmation" placeholder="Confirm Password">
		</div>

		<div>
	        <h4>Hometown:</h4>
		    <input type="text" name="hometown" placeholder="Hometown">
		</div>

		<div>
			<h4>Birthday:</h4>
			<input type="date" name="birthday">
		</div>

		<button type="submit">
			Sign Up
		</button>

        <h6>Already have an account?</h6>

		{{-- <a href="/auth/login.blade.php">
        	<button>
        		Log In
        	</button>
		</a> --}}

	</section>

</form>

@endsection