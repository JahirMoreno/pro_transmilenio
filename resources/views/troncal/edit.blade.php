@extends('layouts.layout')
@section('content')
<div class="container">
	<div class="row col-md-offset-1">
		<section class="content">
			<div class="col-md-10">
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>¡Error!</strong> Revise los campos obligatorios.<br><br>
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
							<img src="../../imagenes/troncal.svg" height="50" width="50">
						</div>
						<br>
						<div class="list-group">
							<a href="{{url('troncal')}}" class="list-group-item active">Troncales</a>
							<a href="{{url('ruta')}}" class="list-group-item">Rutas</a>
							<a href="{{url('portal')}}" class="list-group-item"> Portales</a>
						</div>
					</div>
					<!-- /.col-lg-3 -->

					<div class="col-lg-9">
						<br>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Editar Troncal</h3>
							</div>
							<div class="panel-body">
								<div class="table-container">
									<form method="POST" action="{{ route('troncal.update', $troncal->id) }}"  role="form">
										{{ csrf_field() }}
										{{ method_field('PUT')}}
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="nombre">Nombre:</label>
													<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre" value="{{$troncal->nombre}}">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="tipo_servicio">Tipo Servicio:</label>
													<input type="text" name="tipo_servicio" id="tipo_servicio" class="form-control input-sm" placeholder="Tipo Servicio" value="{{$troncal->tipo_servicio}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="origen">Origen:</label>
													<input type="text" name="origen" id="origen" class="form-control input-sm" placeholder="Origen" value="{{$troncal->origen}}">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label for="destino">Destino:</label>
													<input type="text" name="destino" id="destino" class="form-control input-sm" placeholder="Destino" value="{{$troncal->destino}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<a href="{{ route('troncal.index') }}" class="btn btn-info btn-block" >Atrás</a>
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