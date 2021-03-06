@extends('layouts.masternone')
@section('content')

<div class="formulaire-fond"><a class="btn-floating btn-large button-validation" href="javascript:history.back()" title="vers l'accueil"><i class="material-icons">arrow_back</i></a></div>
		<div class="formulaire-fond-2 right-align">
			<a target="_blank" href="https://www.facebook.com/naqd.critic"><img src="{{ URL::asset('svg/facebook.svg') }}" class="image-svg"></a>
			<a target="_blank" href="https://www.youtube.com/channel/UCofjVJeU-O5SBAEQnl1GexQ"><img src="{{ URL::asset('svg/youtube.svg') }}" class="image-svg"></a>
		</div>

		<div class="row">
			<div class="card center-align col m6 offset-m3">

				<form method="post" action="/profil">

					{{ csrf_field() }}
					
					<h4>Profil Personnel</h4><hr><br>

					<div class="row">
						<div class="input-field col m5 offset-m1">
							<input id="nom" type="text" name="nom" class="validate" required minlength="3" maxlength="255" autocomplete="off" value="{{auth()->user()->nom}}">
							<label for="nom">Nom</label>
						</div>

						<div class="input-field col m5">
							<input id="prenom" type="text" name="prenom" class="validate" required minlength="3" maxlength="255" autocomplete="off" value="{{auth()->user()->prenom}}">
							<label for="prenom">Prénom</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<select name="genre" required>
								<option value="Homme" {{ auth()->user()->genre === 'Homme' ? "selected" : ""}}>Homme</option>
								<option value="Femme" {{ auth()->user()->genre === 'Femme' ? "selected" : ""}}>Femme</option>
							</select>
							<label>Genre</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input id="naissance" type="date" name="naissance" class="validate" required value="{{auth()->user()->naissance}}">
							<label for="naissance" class="active">Date de naissance</label>
						</div>
					</div>

					<div class="row">
						@include('layouts.pays')
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input id="niveau" type="text" name="niveau" class="validate" required maxlength="255" autocomplete="off" value="{{auth()->user()->niveau}}">
							<label for="niveau">Niveau d'instruction</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input id="etablissement" type="text" name="etablissement" class="validate" required maxlength="255" autocomplete="off" value="{{auth()->user()->etablissement}}">
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

		<div class="row">
			<div class="card white center-align col m6 offset-m3">

				<form method="post" action="passReset">

					{{ csrf_field() }}
					
					@include('layouts.success')
					
					<h4>Modification du mot de passe</h4><hr><br>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input id="old_password" type="password" name="old_password" class="validate" required minlength="8" maxlength="32">
							<label for="old_password">Ancien mot de passe</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input id="password" type="password" name="password" class="validate" required minlength="8" maxlength="32">
							<label for="password">Nouveau mot de passe</label>
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
							<button class="btn button-validation" type="submit" name="action">Valider</button>
						</div>
					</div>
				</form>
					
					@include('layouts.errors');
			</div>
		</div>


@endsection