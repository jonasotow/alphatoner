@extends('layouts.app')

@section('content')
	
	@include("layouts.search-products")

	<div class="text-center products-container">
		@include("products.product",["product" => $product])
	</div>

@endsection
