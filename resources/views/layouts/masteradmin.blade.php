<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>NAQD</title>

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/materialize.min.css') }}"  media="screen,projection">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style-admin.css') }}">
	</head>

	<body>

		@yield('content')

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('js/materialize.min.js') }}"></script>
	<script>
		$(document).ready(function() {
    		$('select').material_select();
		});
	</script>
	<script type="text/javascript">
			$(".button-collapse").sideNav();
			$('.carousel.carousel-slider').carousel({fullWidth: true});
		</script>
	</body>
</html>