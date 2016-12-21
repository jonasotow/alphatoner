@extends ('layouts.app')

@section('title', 'Productos')

@section('content')
		<div class="panel panel-default">
            <div class="big-padding title">
                <h1>Productos</h1>
            </div> 

            @include("layouts.nav_admin")

            <div class="row margin-bottom">
                <div class="col-md-12">

					<div class="col-md-6">
	                	<a class="btn btn-new-product btn-red" href="{{url('/products/create')}}">
	                    	<i class="material-icons">add</i> <span>Agregar producto</span>
                    	</a>
					</div>

					<div class="col-md-6">

						{!! Form::open(['route' => 'products.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left btn-search-t']) !!}
							<div class="form-group is-empty">
								{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'BUSCAR PRODUCTO'] ) !!}
							</div>
						{!! Form::close() !!}
							
					</div>

				</div>
            </div>

			<table class="table table-striped table-hove table-products">
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Activo</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($products as $product)
					<tr>
						<td>{{ $product->title }}</td>
						<td>{{ $product->activo }}</td>
						<td> 
								<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" href="{{url('/products/'.$product->id)}}"><i class="material-icons">open_in_new</i> Ver</a>
								
								<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" href="{{url('/products/'.$product->id.'/edit')}}"><i class="material-icons">mode_edit</i> Editar</a>
						 </td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{{$products->links()}}
			</div>
		</div>

@endsection