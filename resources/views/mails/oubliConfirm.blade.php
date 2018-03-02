<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>NAQD</title>

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/materialize.min.css') }}"  media="screen,projection">
		<link rel="stylesheet" href="{{ URL::asset('css/style-mail.css') }}">

	</head>

	<body>

		<nav class="nav-extended">
			<div class="nav-wrapper">
				<a href="/" class="brand-logo center" target="_blank">NAQD</a>
			</div>
		</nav>

		<div class="row">
			<div class="col m6 s12 offset-m3">
				<div class="card">
					<h4 class="center">Récupération du mot de passe !</h4><hr>
					<p>veuillez modifiez votre mot de passe en cliquant sur le bouton ci dessous :</p>

					<div class="center"><br>
						<a href="/resetpassword/?code={{$user->confirm_code}}&email={{$user->email}}" class="btn button-validation-menu">Récupération</a>
					</div><br>
				</div><br>

				<div class="center">
					<a target="_blank" href="https://www.facebook.com/naqd.critic"><img src="{{ URL::asset('svg/facebook.svg') }}" class="image-svg"></a>
					<a target="_blank" href="https://www.youtube.com/channel/UCofjVJeU-O5SBAEQnl1GexQ"><img src="{{ URL::asset('svg/youtube.svg') }}" class="image-svg"></a>
				</div><hr style="border-color: lightgray;">
			</div>
		</div>

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>