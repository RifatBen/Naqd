@extends('layouts.masteradmin')

@section('content')


		@include('layouts.adminSidebar')

			<div class="col m9 s12"><br>

					@include('layouts.success')
					@include('layouts.errors')

				<div class="card" style="padding: 20px 20px 0 20px;">
					<span class="card-title">Supprimer un Utilisateur</span>
					<table class="responsive-table">
						<thead>
							<tr>
								<th style="width: 40%;">Nom Complet</th>
								<th style="width: 40%;">Email</th>
								<th style="width: 20%;"></th>
							</tr>
						</thead>

						<tbody>
							@foreach($users as $user)	
								<tr>
									<td>{{$user->nom . ' ' . $user->prenom}}</td>
									<td>{{$user->email}}</td>
									<td class="center">
										<form method="post" action="/admin/utilisateur/sup/{{$user->id}}">
											{{csrf_field()}}
											@method('DELETE')
											<button class="btn" type="submit" name="action"><i class="material-icons">close</i>
											</button>
										</form>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>

					</div>
				</div>
		</div>


@endsection