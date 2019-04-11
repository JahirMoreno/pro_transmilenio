@extends('layouts.layout')
@section('content')
<!-- Page Content -->
<section class="content">
	<div class="container">

		<div class="row">

			<div class="col-lg-3">
				<div class="text-center">
				<h1 class="my-4">CRUD</h1>
				<img src="imagenes/bus.svg" height="50" width="50">
				</div>
				<br>
				<div class="list-group">
					<a href="{{url('troncal')}}" class="list-group-item">Troncales</a>
					<a href="{{url('ruta')}}" class="list-group-item ">Rutas</a>
					<a href="{{url('portal')}}" class="list-group-item active"> Portales</a>
				</div>
				<a href="{{url('/')}}" class="btn btn-default">Regresar</a>
			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9">
				<br>
				<div class="col-ld-1">
					<div class="panel panel-default">
						@if(Session::has('success'))
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
						@endif
						@if(Session::has('updated'))
						<div class="alert alert-success">
							{{Session::get('updated')}}
						</div>
						@endif
						@if(Session::has('deleted'))
						<div class="alert alert-danger">
							{{Session::get('deleted')}}
						</div>
						@endif
						<div class="panel-body">
							<div class="pull-left"><h3>Lista Portales</h3></div>
							<div class="pull-right">
								<a href="{{ route('portal.create')}}" class="btn btn-default" >Añadir Portal</a>
							</div>
							<div class="table-container">
								<table id="mytable" class="table table-bordred table-striped">
									<thead>
										<th>Nombre</th>
										<th>Editar</th>
										<th>Eliminar</th>
									</thead>
									<tbody>
										@if($portales->count())
										@foreach($portales as $portal)
										<tr>
											<td>{{$portal->nombre}}</td>
											<td><a class="btn btn-primary btn-xs" href="{{action('portalController@edit', $portal->id)}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
											<td>
												<form action="{{action('portalController@destroy', $portal->id)}}" method="post">
													{{csrf_field()}}
													<input name="_method" type="hidden" value="DELETE">
													<button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
												</form>
											</td>
										</tr>
										@endforeach
										@else
										<tr>
											<td colspan="6">No hay registros</td>
										</tr>
										@endif
									</tbody>

								</table>
							</div>
						</div>
						{{ $portales->links() }}
					</div>
				</div>
				<!-- /.col-lg-9 -->
			</div>
		</div>
	</div>
</section>
@endsection
