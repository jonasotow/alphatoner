{!! Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE', 'class' => 'inline-block' ]) !!}
	<input type="submit" value="Eliminar" class="red-text no-padding no-margin no-transform mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
{!! Form::close() !!}