@extends ('layouts.app')

@section('title', 'Productos')

@section('content')
	<div class="container">
		<div class="panel panel-default">
            <div class="big-padding text-center blue-grey white-text">
                <h1>Productos</h1>
            </div> 

            @include("layouts.nav_admin")

            <div class="row margin-bottom">
                <div class="col-sm-8 col-xs-12">
                    <a class="btn btn-new-product btn-red" href="{{url('/products/create')}}">
                        <i class="material-icons">add</i> <span>Agregar producto</span>
                    </a>
                </div>
            </div>

			<table class="table table-striped table-hove table-products">
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Descripción</th>
						<th>Precio</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($products as $product)
					<tr>
						<td>{{ $product->title }}</td>
						<td>{{ $product->description }}</td>
						<td>{{ $product->pricing }}</td>
						<td> 
								<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" href="{{url('/products/'.$product->id)}}"><i class="material-icons">open_in_new</i> Ver</a>
								
								<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" href="{{url('/products/'.$product->id.'/edit')}}"><i class="material-icons">mode_edit</i> Editar</a>

								@include('products.delete',['product' => $product])
							

						 </td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{{$products->links()}}
			</div>
		</div>
	</div>

@endsection