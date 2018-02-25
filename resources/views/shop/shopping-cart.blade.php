@extends('layouts.master')
@section('title')
	Laravel Shopping-cart
@endsection
@section('content')
	@if(Session::has('cart'))
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<ul class="list-group">
					@foreach($products as $product)
					<li class="list-group-item">
						<span class="badge">{{ $product['qty'] }}</span>
						<strong>{{ $product['item'] ['title'] }}</strong>
						<span class="label label-success"> {{ $product['price'] }} </span>
						<div class="btn-group dropdown">
							<button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown"> Action <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/reduce/{{ $product['item']['id'] }}">Reduce 1</a></li>
								<li><a href="/remove/{{ $product['item']['id'] }}">Remove All</a></li>
							</ul>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<strong>Total: {{ $totalPrice }}</strong>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<a href="/checkout" type="button" class="btn btn-success">Checkout</a>
			</div>
		</div>
	@else
	<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h2>No items in Cart!</h2>
			</div>
		</div>
	@endif
@endsection