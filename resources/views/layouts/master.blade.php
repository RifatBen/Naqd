<!DOCTYPE html>
<html>
<head>

	@include('layouts.links')

	<title>NAQD</title>
</head>
<body>

	@include('layouts.navbar')
	
	@yield('content')

	@include('layouts.footer')
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

