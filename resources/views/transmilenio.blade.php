@extends('layouts.layout')
@section('content')
<div class="text-center">
	<div class="col-sm-4 col-sm-offset-4">
		<h1 class="my-4">PROYECTO TRANSMILENIO</h1>
		<br>
		<img src="imagenes/bus.svg" height="100" width="100">
		<br><br><br>
		<div class="list-group">
			<a href="{{url('troncal')}}" class="list-group-item active">CRUD</a>
			<a href="{{url('generador')}}" class="list-group-item">Generar Datos</a>
			<a href="{{url('carga')}}" class="list-group-item active">Cargar Datos</a>
			<a href="{{url('wsportal')}}" class="list-group-item">Web Service</a>
			<a href="{{url('estacion')}}" class="list-group-item active">Reportes</a>
		</div>
		<h5>Copyright &copy; Lizzeth Amortegui - Jahir Moreno</h5>
	</div>
</div>
@endsection