@extends('layouts.master')
@section('content')

<div class="back-top-container">
	<h3>NAQD</h3>
</div>

<div class="row">
	<div class="col s6 offset-s3">
		<div class="card formulaire-card">
			<div class="card-content white-text center-align">

				<span class="card-title" style="font-size: 45px;">Connexion</span>
				<br><hr style="border: 1px white solid;"><br>

				<form>
					<div class="row">
						<div class="input-field col s8 offset-s2">
							<input id="email" type="email" name="email" class="validate">
							<label for="email" class="active">Adresse électronique</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s8 offset-s2">
							<input id="mot_de_passe" type="password" name="mot_de_passe" class="validate">
							<label for="mot_de_passe" class="active">Mot de passe</label>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>

@endsection