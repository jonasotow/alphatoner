@extends("layouts.app")
@section("content")
	<div class="big-padding title">
		<h1>Tu carrito de compras</h1>
	</div>
	<div class="products-container">

		<div class="text-center"> <a class="more-products" href="{{url("/")}}">Agregar más productos</a> </div>
		
		<div class="cards col-sm-8">
			@foreach($products as $product)
				<div class="card product-card text-left">
					<div class="col-sm-2 col-xs-12">

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
					<div class="col-sm-1 col-xs-12">
						<a href="" class="btn-raised danger"><i class="material-icons">&#xE92B;</i></a>
					</div>
				</div>
			@endforeach
		</div>
		<div class="pay-cart col-sm-4">
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