@extends('layouts.layout')
@section('content')
<!-- Page Content -->
<section class="content">
	<div class="container">

		<div class="row">

			<div class="col-lg-3">
				<div class="text-center">
					<h1 class="my-4">WEB SERVICE</h1>
					<img src="imagenes/json.svg" height="50" width="50">
				</div>
				<br>
				<div class="list-group">
					<a href="{{url('wstroncal')}}" class="list-group-item">Troncales</a>
					<a href="{{url('wsruta')}}" class="list-group-item active">Rutas</a>
					<a href="{{url('wsportal')}}" class="list-group-item"> Portales</a>
				</div>
				<a href="{{url('/')}}" class="btn btn-default">Regresar</a>
			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9">
				<br>
				<div class="col-ld-1">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="pull-left"><h3>Lista Rutas</h3></div>
							<div class="pull-right">
							</div>
							<div class="table-container">
								<table id="mytable" class="table table-bordred table-striped">
									<thead>
										<th>Nombre</th>
										<th>Estado</th>
										<th>Longitud</th>
										<th>Tipo Servicio</th>
									</thead>
									<tbody>
										<?php
										$url = "https://my-json-server.typicode.com/jahirmoreno/ws-transmilenio/rutas";
										$json = file_get_contents($url);
										$rutas = json_decode($json, true);
										foreach($rutas as $ruta)
											echo "<tr>
										<td>{$ruta['nombre']}</td>
										<td>{$ruta['estado']}</td>
										<td>{$ruta['longitud']}</td>
										<td>{$ruta['tipo_servicio']}</td>
										</tr>";
										?>
									</tbody>

								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /.col-lg-9 -->
			</div>
		</div>
	</div>
</section>
@endsection
