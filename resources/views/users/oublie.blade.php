@extends('layouts.masternone')
@section('content')
<div class="formulaire-fond"></div>
		<div class="formulaire-fond-2 right-align">
			<a target="_blank" href="https://www.facebook.com/naqd.critic"><img src="svg/facebook.svg" class="image-svg"></a>
			<a target="_blank" href="https://www.youtube.com/channel/UCofjVJeU-O5SBAEQnl1GexQ"><img src="svg/youtube.svg" class="image-svg"></a>
		</div>

<div class="row">
			<div class="card center-align col m6 offset-m3">
				@include('layouts.errors')
				<form method="post" action="/oublie">
					{{csrf_field()}}
					<h5>Veuillez saisir votre adresse électronique</h5><hr><br>
				
					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input id="email" type="email" name="email" class="validate" required maxlength="255">
							<label for="email">Adresse électronique</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<button class="btn button-validation" type="submit" name="action">Valider</button>
						</div>
					</div>

					<div class="row">
						<span>Retourner vers <a href="/connexion">page de connexion</a></span>
					</div>
				</form>

			</div>
		</div>


@endsection