@extends('layouts.layout')
@section('content')
<div class="text-center">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h1 class="my-4">Generación de Datos</h1>
			<br>
			<img src="imagenes/descarga.svg" height="100" width="100">
			<br><br><br>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Troncales</h3>
					</div>
					<div class="panel-body">
						<div class="table-container">
							<form method="POST" action="{{route('generarTroncales')}}" role="form">
								@csrf
								<div class="row">
									<div class="col-xs-6 col-xs-offset-3">
										<input type="number" name="cantidadTroncales" id="cantidadTroncales" class="form-control input-sm" placeholder="Cantidad" required="true" min="1" max="50000">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-xs-6 col-xs-offset-3">
										<input type="submit"  value="Generar" class="btn btn-success btn-block">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Rutas</h3>
					</div>
					<div class="panel-body">
						<div class="table-container">
							<form method="POST" action="{{route('generarRutas')}}" role="form">
								@csrf
								<div class="row">
									<div class="col-xs-6 col-xs-offset-3">
										<input type="number" name="cantidadRutas" id="cantidadRutas" class="form-control input-sm" placeholder="Cantidad" required="true" min="1" max="50000">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-xs-6 col-xs-offset-3">
										<input type="submit"  value="Generar" class="btn btn-success btn-block">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Portales</h3>
					</div>
					<div class="panel-body">
						<div class="table-container">
							<form method="POST" action="{{route('generarPortales')}}" role="form">
								@csrf
								<div class="row">
									<div class="col-xs-6 col-xs-offset-3">
										<input type="number" name="cantidadPortales" id="cantidadPortales" class="form-control input-sm" placeholder="Cantidad" required="true" min="1" max="50000">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-xs-6 col-xs-offset-3">
										<input type="submit"  value="Generar" class="btn btn-success btn-block">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<a href="{{url('/')}}" class="btn btn-default">Regresar</a>
	</div>
</div>
@endsection