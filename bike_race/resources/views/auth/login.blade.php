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

<form class="primary_section log_in" role="form" method="POST" action="{{ url('/auth/login') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<section>

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

		<button type="submit">
			Log In
		</button>

        <h6>Forgot your E-mail or Password?</h6>


		{{-- <div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember"> Remember Me
					</label>
				</div>
			</div>
		</div> --}}

		{{-- <div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">Log In</button>
				<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
			</div>
		</div> --}}
	</section>
</form>
				
@endsection