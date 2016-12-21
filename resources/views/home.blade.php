@extends("layouts.app")

@section("content")

        <div class="panel panel-default">
            <div class="big-padding title">
                <h1>Panel de Control</h1>
            </div>        
            @include("layouts.nav_admin")

            <div class="panel-body">
                
                <h3>Dashboard</h3>
                <p>Una mirada a lo más relevante de tu tienda.</p>

                <div class="row top-space">
                    
                    <div class="col-xs-4 col-md-3 col-lg-2 sale-data">
                        <span>{{$totalMonth}}MXN</span>
                    Ingresos del mes
                    </div>

                    <div class="col-xs-4 col-md-3 col-lg-2 sale-data">
                        <span>{{$totalMonthCount}}</span>
                    Número de ventas
                    </div>
                </div>                

            </div>
        </div>

@endsection