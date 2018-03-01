@extends('layouts.master')

@section('content')
		<nav class="nav-extended">
			<div class="nav-wrapper">
				<a href="accueil.php" class="brand-logo center">NAQD</a>
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
					<a href="#"><img src="svg/twitter.svg" class="image-svg"></a>
					<a href="#"><img src="svg/facebook.svg" class="image-svg"></a>
					<a href="#"><img src="svg/youtube.svg" class="image-svg"></a>
				</div><hr style="border-color: lightgray;">
			</div>
		</div>
@endsection