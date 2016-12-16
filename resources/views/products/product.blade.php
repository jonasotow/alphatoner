		<div class="card product text-left">

		@if(Auth::check() && $product->user_id == Auth::user()->id)

			<div class="absolute actions">
				<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" href="{{url('/products/'.$product->id.'/edit')}}"><i class="material-icons">mode_edit</i> Editar</a>

			</div>

		@endif
			<div class="item">
				<div class="col-sm-3 col-xs-12">
					
					@if($product->extension)
						<a href="{{url('/products/'.$product->id)}}" >	
							<img src="{{url("/products/images/$product->id.$product->extension")}}" class="product-avatar">
						</a>
					@endif

				</div>
				<div class="col-sm-9 col-xs-12">

					<a href="{{url('/products/'.$product->id)}}">{{$product->title}}</a>

					<div>
						{{$product->description}} 
					</div>
					<hr>
					<div>
						<strong>Precio: </strong> <span class="price">$ {{$product->pricing}}</span>
					</div>
				
						@include("in_shopping_carts.form",["product" => $product])
				</div>
			</div>
		</div>