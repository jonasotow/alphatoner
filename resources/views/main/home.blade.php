@extends ('layouts.app')

@section('title', 'Productos')

@section('content')

	@include("layouts.search-products")

	<div class="text-center products-container">
			
		@foreach($products as $product)

			<div class="col-md-12">
				@include("products.product",["product" => $product])
			</div>
			
		@endforeach
	
		{{$products->links()}}

	</div>


@endsection