@extends('layouts.layout')
@section('content')
<br> <br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
	var analytics = <?php echo $horario; ?>;
	google.charts.load('current', {'packages': ['corechart']}
		);
	google.charts.setOnLoadCallback(drawChart);

	function drawChart()
	{
		var data = google.visualization.arrayToDataTable(analytics);
		var options = {
			height: 400,
			width: 800,
			curveType: 'function',
			series: {
            0: { color: '#e2431e' },
        }
		};
		var chart =new google.visualization.LineChart(
			document.getElementById('rutaHorario'));
		chart.draw(data, options);
	}
</script>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="text-center">
					<h1 class="my-4">REPORTES</h1>
					<img src="imagenes/reportes.svg" height="70" width="70">
					<br> <br>
					<div class="list-group">
						<a href="{{url('reportes')}}" class="list-group-item">Troncales</a>
						<a href="{{url('reportesrutas')}}" class="list-group-item">Rutas</a>
						<a href="{{url('reporteshorarios')}}" class="list-group-item active">Horarios</a>
					</div>
					<a href="{{url('/')}}" class="btn btn-default">Regresar</a>
				</div>
			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9">
				<br>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Cantidad de rutas por horario de salida:  </h3>
					</div>
					<div class="panel-body">
						<div class="table-container">
							<div class="row" >
								<div id="rutaHorario"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

