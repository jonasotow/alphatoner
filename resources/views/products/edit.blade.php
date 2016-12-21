@extends ('layouts.app')

@section('content')

	<div>
		<div class="big-padding title">
            <h1>Nuevo Producto</h1>
        </div>

   	@include('products.form',['product' => $product, 'url' => '/products/'.$product->id, 'method' => 'PATCH'])
	</div>

@endsection