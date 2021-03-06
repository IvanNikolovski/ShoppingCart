@extends('layouts.master')
@section('content')
<h1 class="signin ">Sign In:</h1>
<div class="row"> 
	<div class="col-md-4 col-md-offset-4">
		 
		@if(count($errors)>0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		</div>
		@endif
		<form action="/signin" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="email">E-Mail</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<button type="submit">Sign In</button>
		</form>
		<p>Do not have an account? <a href="/signup">Sign Up instead!</a></p>
	</div>
</div>
@endsection