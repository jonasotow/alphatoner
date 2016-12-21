{!! Form::open(['url' => $url, 'method' => $method, 'files' => true, 'class' => 'form-product' ]) !!}

<div class="form-horizontal col-md-7">
	<div class="form-group">
		<label for="title" class="col-md-4 control-label-material">Nombre de Producto:</label>
		<div class="col-md-8">
			{{ Form::text('title',$product->title,['class' => 'form-control', 'id' => 'title']) }}
		</div>
	</div>
	<div class="form-group">	
		<label for="price" class="col-md-4 control-label-material">Precio de Venta:</label>
		<div class="col-md-8">
			{{ Form::number('pricing',$product->pricing,['class' => 'form-control', 'id' => 'price']) }}
		</div>
	</div>
	<div class="form-group">
		<label for="description" class="col-md-4 control-label-material">Descripción:</label>

		<div class="col-md-8">
			{{ Form::textarea('description',$product->description,['rows' => '3', 'class' => 'form-control', 'id' => 'description']) }}
		</div>	
	</div>
	<div class="form-group text-right">
  		 <a class="btn btn-raised btn-default" href="{{url('/products')}}"> Cancelar </a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
</div>

<div class="form-horizontal col-md-5">

	<div class="form-group">
		<label for="cover" class="col-md-6 control-label-material">Suber una Imagen: </label>
		<div class="col-md-6">
			<div class="form-group is-empty is-fileinput">
				{{ Form::file('cover',['id'=>'cover1']) }}
				<div class="input-group">
	            	<input type="text" readonly="" class="form-control" placeholder="Selecciona un archivo">
	                <span class="input-group-btn input-group-sm">
		                  <button type="button" class="mdl-button mdl-js-button mdl-button--icon btn-color-green">
		                    <i class="material-icons">unarchive</i>
		                 </button>
	                </span>
	            </div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-6 control-label-material">Producto Activo:</label>
		<div class="col-md-6 checkbox">
			<label>
				{{ Form::checkbox('activo', 1, true, ['class' => 'checkbox-material']) }}
			</label>
		</div>
	</div>
	
</div>

{!! Form::close() !!}