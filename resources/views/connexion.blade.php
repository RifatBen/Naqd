<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
	<title>NAQD</title>
</head>
<body>

	<div class="row">
		<form class="col s6 offset-s6">
			<h1>CONNEXION</h1><hr>
			<div class="row">
				<div class="input-field col s12">
					<input id="email" type="email" name="email" class="validate">
					<label for="email">Adresse électronique</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<input id="password" type="password" name="password" class="validate">
					<label for="password">Mot de passe</label>
				</div>
			</div>
		</form>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>