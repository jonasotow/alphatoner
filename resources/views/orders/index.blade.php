@extends("layouts.app")

@section("content")

	<div class="container">
		<div class="panel panel-default">
            <div class="big-padding text-center blue-grey white-text">
                <h1>Ordenes</h1>
            </div>     		
            @include("layouts.nav_admin")
			
			<div class="panel-body">

				<h3>Ventas</h3>

				<table class="table table-bordered">
					
					<thead>
						<tr>
							<td>ID de venta</td>
							<td>Comprador</td>
							<td>Dirección</td>
							<td>Número de guía</td>
							<td>Status</td>
							<td>Fecha de venta</td>
							<td>Acciones</td>
						</tr>
					</thead>
					<tbody>
						@foreach($orders as $order)
							<tr>
								<td>{{$order->id}}</td>
								<td>{{$order->recipient_name}}</td>
								<td>{{$order->address()}}</td>
								<td>
									<a href="#" 
										data-type="text" 
										data-pk="{{$order->id}}" 
										data-url="{{url("/orders/$order->id")}}"
										data-title="Número de guía" 
										data-value="{{$order->guide_number}}"
										class="set-guide-number"
										data-name="guide_number" 
										></a>
								</td>

								<td>
									<a href="#" 
										data-type="select" 
										data-pk="{{$order->id}}" 
										data-url="{{url("/orders/$order->id")}}"
										data-title="Status" 
										data-value="{{$order->status}}"
										class="select-status"
										data-name="status"></a>
								</td>
								<td>{{$order->created_at}}</td>
								<td>Acciones</td>
							</tr>
						@endforeach

					</tbody>

				</table>

			</div>
		</div>
	</div

@endsection