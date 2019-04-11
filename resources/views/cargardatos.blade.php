@extends('layouts.layout')
@section('content')
<div class="text-center">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h1 class="my-4">Carga de Datos</h1>
			<br>
			<img src="imagenes/carga.svg" height="100" width="100">
			<br><br><br>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Cargar Troncales</h3>
					</div>
					<div class="panel-body">
						<div class="table-container">
							<form method="POST" action="" role="form">
								<div class="row">
									<div class="col-xs-6 col-xs-offset-1">
										<input type="file" name="troncal" required="true">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-xs-6 col-xs-offset-3">
										<input type="submit"  value="Cargar" class="btn btn-success btn-block">
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
						<h3 class="panel-title">Cargar Rutas</h3>
					</div>
					<div class="panel-body">
						<div class="table-container">
							<form method="POST" action="" role="form">
								<div class="row">
									<div class="col-xs-6 col-xs-offset-1">
										<input type="file" name="troncal" required="true">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-xs-6 col-xs-offset-3">
										<input type="submit"  value="Cargar" class="btn btn-success btn-block">
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
						<h3 class="panel-title">Cargar Portales</h3>
					</div>
					<div class="panel-body">
						<div class="table-container">
							<form method="POST" action="" role="form">
								<div class="row">
									<div class="col-xs-6 col-xs-offset-1">
										<input type="file" name="troncal" required="true">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-xs-6 col-xs-offset-3">
										<input type="submit"  value="Cargar" class="btn btn-success btn-block">
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