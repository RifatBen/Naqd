@extends('layouts.masteradmin')


@section('content')

@include('layouts.adminSidebar')

			<div class="col m9 s12">
				<div class="row"><hr>
					<div class="col m6 s12 center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/notification/ajout">Ajouter</a></div>
					<div class="col m6 s12 center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/notification/sup">Supprimer</a></div>
				</div><hr>

				<div class="row">

					@include('layouts.errors')
					@include('layouts.success')
					
						<div class="card">
							<div class="card-content">
								<span class="card-title">Ajouter une notification (Nouveautés)</span>
								<form method="post" action="/admin/notification/ajout"> <!-- formulaire -->
									{{ csrf_field() }}
									<div class="input-field">
										<input type="hidden" name="type" value="nouveautes" id="nouveautes">
										<input type="text" id="notification" name="notification">
										<label for="notification">Nouveautés</label>
									</div>
									<center><button class="btn button-validation" type="submit" name="">Valider</button></center>
								</form>
							</div>
						</div>

						<div class="card">
							<div class="card-content">
								<span class="card-title">Ajouter une notification (Important)</span>
								<form method="post" action="/admin/notification/ajout"> <!-- formulaire -->
									{{ csrf_field() }}
									<div class="input-field">
										<input type="hidden" name="type" value="important" id="important">
										<input type="text" id="notification" name="notification">
										<label for="notification">Important</label>
									</div>
									<center><button class="btn button-validation" type="submit" name="">Valider</button></center>
								</form>
							</div>
						</div>

						<div class="card">
							<div class="card-content">
								<span class="card-title">Ajouter une notification (Rendez-vous !)</span>
								<form method="post" action="/admin/notification/ajout"> <!-- formulaire -->
									{{ csrf_field() }}
									<div class="input-field">
										<input type="hidden" name="type" value="rendezvous" id="rendezvous">
										<input type="text" id="notification" name="notification">
										<label for="notification">Rendez-vous !</label>
									</div>
									<center><button class="btn button-validation" type="submit" name="">Valider</button></center>
								</form>
							</div>
						</div>
				</div>
			</div>
		</div>


@endsection