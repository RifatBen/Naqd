@extends('layouts.masternone')
@section('content')
<div class="formulaire-fond"></div>
		<div class="formulaire-fond-2 right-align">
			<a target="_blank" href="https://www.facebook.com/naqd.critic"><img src="svg/facebook.svg" class="image-svg"></a>
			<a target="_blank" href="https://www.youtube.com/channel/UCofjVJeU-O5SBAEQnl1GexQ"><img src="svg/youtube.svg" class="image-svg"></a>
		</div>

		<div class="row">
			<div class="card center-align col m6 offset-m3">

				<form method="post">
					<h4>Inscrivez-vous</h4><hr><br>

					{{ csrf_field() }}
						
					<div class="row">
						<span>Vous avez déjà un compte ? <a href="/connexion">Connexion</a></span>
					</div>

					<div class="row">
						<div class="input-field col m5 offset-m1">
							<input id="nom" type="text" name="nom" class="validate" required minlength="3" maxlength="255" autocomplete="off">
							<label for="nom">Nom</label>
						</div>

						<div class="input-field col m5">
							<input id="prenom" type="text" name="prenom" class="validate" required minlength="3" maxlength="255" autocomplete="off">
							<label for="prenom">Prénom</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input id="email" type="email" name="email" class="validate" required maxlength="255" autocomplete="off">
							<label for="email">Adresse électronique</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input id="password" type="password" name="password" class="validate" required minlength="8" maxlength="32">
							<label for="password">Mot de passe</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input id="password_confirmation" type="password" name="password_confirmation" class="validate" required minlength="8" maxlength="32">
							<label for="password_confirmation">Confirmation du mot de passe</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<select name="genre" required>
								<option value="" disabled selected>Sélectionnez votre genre</option>
								<option value="Homme">Homme</option>
								<option value="Femme">Femme</option>
							</select>
							<label>Genre</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input id="naissance" type="date" name="naissance" class="validate" required>
							<label for="naissance" class="active">Date de naissance</label>
						</div>
					</div>
					
					<div class="row">
					@include('layouts.pays')
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input id="niveau" type="text" name="niveau" class="validate" required maxlength="255" autocomplete="off">
							<label for="niveau">Niveau d'instruction</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input id="etablissement" type="text" name="etablissement" class="validate" required maxlength="255" autocomplete="off">
							<label for="etablissement">Etablissement actuel</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<button class="btn button-validation" type="submit" name="action">Valider</button>
						</div>
					</div>
				</form>
			</div>
		</div>

	@include('layouts.errors')
	@include('layouts.success')

@endsection