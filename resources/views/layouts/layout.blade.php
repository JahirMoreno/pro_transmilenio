<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">


	<title>Proyecto Transmilenio</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			setTimeout(function() {
				$(".aviso").fadeOut(1500);
			},1300);
		});
	</script>
</head>
<br>
<br>

<body >
	@yield('content')
</body>
</html>