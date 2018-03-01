@extends('layouts.master')

@section('content')

	<div class="formulaire-fond"></div>
		<div class="card">
			<div class="card-content center col s12 m6">
				<h4>Réinitialisation du mot de passe</h4><br><hr>
					
						<form method="post" action="/resetpassword/?code={{request('code')}}&email={{request('email')}}">
							
							<div class="row">
								{{ csrf_field() }}

								<div class="input-field col m6 offset-m3">
									<input type="password" name="password" id="password" class="validate">
									<label for="password">Nouveau mot de passe</label>
								</div>	
							</div>

							<div class="row">
									<div class="input-field col m6 offset-m3">
										<input type="password" name="password_confirmation" id="password_confirmation" class="validate">
										<label for="password_confirmation">Confirmation du mot de passe</label>
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

@endsection