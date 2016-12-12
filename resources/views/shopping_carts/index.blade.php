@extends("layouts.app")
@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Tu carrito de compras</h1>
	</div>
	<div class="container products-container">

	<div class="text-center"> <a class="more-products" href="{{url("/")}}">Agregar más productos</a> </div>
		
		<div class="cards">
			@foreach($products as $product)
				<div class="card product-card text-left">
					<div class="row">

						<div class="col-sm-3 col-xs-12">

							@if($product->extension)
								<img src="{{url("/products/images/$product->id.$product->extension")}}" class="product-avatar">
							@else
								<img src="{{url('/img/alphatoner/no-product.jpg')}}" class="product-avatar">
							@endif
						</div>
						<div class="col-sm-3 col-xs-12">
							<div class="name">{{$product->title}}</div>
							<a class="more" href="{{url('/products/'.$product->id)}}">Más información</a>
						</div>	
						<div class="col-sm-2 col-xs-12">
							Precio: <div class="price">${{$product->pricing}}</div>
						</div>
						<div class="col-sm-2 col-xs-12">
							Cantidad: 
							{{$product->amount_products}}


						</div>
						<div class="col-sm-2 col-xs-12">
							Subtotal: <div class="price">${{$product->pricing}}</div>
						</div>

					</div>
				</div>
			@endforeach
		</div>
		<div class="pay-cart">
			<div class="total-pay text-center">
				
				@if($productsCount > 1)
					Total ({{$productsCount}} productos): <span>${{$total}}</span>
				@else
					Total ({{$productsCount}} producto): <span>${{$total}}</span>
				@endif
			</div>
			<div class="text-center">
				@include("shopping_carts.form")
			</div>
		</div>
	</div>
@endsection