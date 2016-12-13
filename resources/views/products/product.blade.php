		<div class="card product text-left">

		@if(Auth::check() && $product->user_id == Auth::user()->id)

			<div class="absolute actions">
				<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" href="{{url('/products/'.$product->id.'/edit')}}"><i class="material-icons">mode_edit</i> Editar</a>

			</div>

		@endif

			<h1>{{$product->title}}</h1>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					
					@if($product->extension)
						<img src="{{url("/products/images/$product->id.$product->extension")}}" class="product-avatar">
					@endif

				</div>
				<div class="col-sm-6 col-xs-12">
					<p>
						<strong>Descripción</strong>
					</p>
					<p>
						{{$product->description}}
					</p>
					<p>
						<strong>Precio:</strong><span> ${{$product->pricing}}</span>
					</p>
				
					<p>
						@include("in_shopping_carts.form",["product" => $product])
					</p>
				</div>
			</div>
		</div>