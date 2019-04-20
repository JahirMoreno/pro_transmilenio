@extends('layouts.layout')
@section('content')
<br> <br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
	var analytics = <?php echo $troncal; ?>;
	google.charts.load('current', {'packages': ['corechart']}
		);
	google.charts.setOnLoadCallback(drawChart);

	function drawChart()
	{
		var data = google.visualization.arrayToDataTable(analytics);
		var options = {

		};
		var chart =new google.visualization.ColumnChart(
			document.getElementById('troncalesEstacion'));
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
					<br><br>
					<a href="{{url('/')}}" class="btn btn-default">Regresar</a>
				</div>
			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9">
				<br>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Número de estaciones por troncal</h3>
					</div>
					<div class="panel-body">
						<div class="table-container">
							<div class="row" >
								<div id="troncalesEstacion" style="height: 500; width: 800;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

