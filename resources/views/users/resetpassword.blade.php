@extends('layouts.masternone')
@section('content')
<div class="formulaire-fond"></div>
		<div class="formulaire-fond-2 right-align">
			<a target="_blank" href="https://www.facebook.com/naqd.critic"><img src="{{ URL::asset('svg/facebook.svg') }}" class="image-svg"></a>
			<a target="_blank" href="https://www.youtube.com/channel/UCofjVJeU-O5SBAEQnl1GexQ"><img src="{{ URL::asset('svg/youtube.svg') }}" class="image-svg"></a>
		</div>

		<div class="row">
			<div class="card center-align col m6 offset-m3">
			
				<form method="post" action="/resetpassword/?code={{request('code')}}&email={{request('email')}}">
					
					<h4>Réinitialisation du mot de passe</h4><hr>

					{{ csrf_field() }}
					<div class="row">
						<div class="input-field col m10 offset-m1">
							<input type="password" name="password" id="password" class="validate">
							<label for="password">Nouveau mot de passe</label>
						</div>	
					</div>

					<div class="row">
						<div class="input-field col m10 offset-m1">
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
			@include('layouts.errors')
			@include('layouts.success')
		</div>

@endsection