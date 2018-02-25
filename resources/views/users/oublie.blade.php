@extends('layouts.master')

@section('content')

<div class="row">
			<div class="card center-align col m6 offset-m3">

				<form method="post">
					<h5>Vueillez saisir votre adresse électronique</h5><hr><br>

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
						<span>Retourner vers <a href="connexion.php">page de connexion</a></span>
					</div>
				</form>

			</div>
		</div>


@endsection