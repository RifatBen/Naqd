@extends('layouts.master')

@section('content')


<div class="col s6 offset-s3">
		<h3 class="center-align">Inscription</h3>



</div>	


	<div class="row">
		<div class="col s6 offset-s3">	
				<form action="/inscription" method="POST">
				
					{{ csrf_field() }}

					<div class="input-field">

						<input type="text" name="name" id="name" class="input-field"> <label for="name" class="active">Nom </label>

					</div>
						

					<div class="input-field">

					<input type="email" name="email" id="email" class="input-field"> <label for="email" class="active">Email </label>

					</div>


					<div class="input-field">

						<input type="password" name="password" id="password"> <label for="password" class="active">Password</label>
					
					</div>
						
					<div class="input-field">

						<input type="password" name="password_confirmation" id="password_confirmation"> <label for="password_confirmation" class="active">Password Confirmation</label>
					
					</div>


					<div class="input-field">

						<button class="btn waves-effect waves-light">Valider</button>

					</div>	


				</form>

				
@include('layouts.errors')	

		</div>
	</div>



@endsection