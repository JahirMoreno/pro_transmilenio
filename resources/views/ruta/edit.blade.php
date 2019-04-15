@extends('layouts.layout')
@section('content')
<div class="container">
	<div class="row col-md-offset-1">
		<section class="content">
			<div class="col-md-10">
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Error!</strong> Revise los campos obligatorios.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				@if(Session::has('success'))
				<div class="alert alert-info aviso">
					{{Session::get('success')}}
				</div>
				@endif
				<div class="row">

					<div class="col-lg-3">
						<div class="text-center">
							<h1 class="my-4">CRUD</h1>
							<img src="../../imagenes/ruta.svg" height="50" width="50">
						</div>
						<br>
						<div class="list-group">
							<a href="{{url('troncal')}}" class="list-group-item">Troncales</a>
							<a href="{{url('ruta')}}" class="list-group-item active">Rutas</a>
							<a href="{{url('portal')}}" class="list-group-item"> Portales</a>
						</div>
					</div>
					<!-- /.col-lg-3 -->

					<div class="col-lg-9">
						<br>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Editar Ruta</h3>
							</div>
							<div class="panel-body">
								<div class="table-container">
									<form method="POST" action="{{ route('ruta.update', $ruta->id) }}"  role="form">
										{{ csrf_field() }}
										{{ method_field('PUT')}}
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre" value="{{$ruta->nombre}}">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<input type="text" name="estado" id="estado" class="form-control input-sm" placeholder="Estado" value="{{$ruta->estado}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<input type="number" name="longitud" id="longitud" class="form-control input-sm" placeholder="Longitud" value="{{$ruta->longitud}}">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<input type="text" name="tipo_servicio" id="tipo_servicio" class="form-control input-sm" placeholder="Tipo Servicio" value="{{$ruta->tipo_servicio}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<a href="{{ route('ruta.index') }}" class="btn btn-info btn-block" >Atrás</a>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection