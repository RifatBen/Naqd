<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/materialize.min.css') }}"  media="screen,projection">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

	<title>NAQD</title>
</head>
<body>
	@include('layouts.navbar')
	
	@yield('content')

	@include('layouts.footer')
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
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

