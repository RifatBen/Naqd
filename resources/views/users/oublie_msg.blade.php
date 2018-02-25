@extends('layouts.master')


@section('content')


		<div class="formulaire-fond"></div>
		<div class="formulaire-fond-2 right-align">
			<a href="#"><img src="svg/twitter.svg" class="image-svg"></a>
			<a href="#"><img src="svg/facebook.svg" class="image-svg"></a>
			<a href="#"><img src="svg/youtube.svg" class="image-svg"></a>
		</div>

		<div class="row">
			<div class="card center-align col m6 offset-m3">
				<div class="card-content">
					<span class="card-title">Mail de récupération envoyé !</span><hr><br>
					<p>Un mail vous a été envoyé, veuillez accédez à votre adresse électronique pour récuperer votre mot de passe, <a href="/connexion">Se connecter</a></p>
				</div>
			</div>
		</div>

@endsection