@extends ('layouts.app')

@section('title', 'Productos')

@section('content')

	<div class="text-center products-container">
			
		@foreach($products as $product)

			<div class="col-md-12">
				@include("products.product",["product" => $product])
			</div>
			
		@endforeach
	
		<div>
			{{$products->links()}}
		</div>
	</div>


@endsection