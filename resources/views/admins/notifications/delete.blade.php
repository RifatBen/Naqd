@extends('layouts.masteradmin')

@section('content')

@include('layouts.adminSidebar')


			<div class="col m9 s12">
				<div class="row"><hr>
					<div class="col m6 s12 center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/notification/ajout">Ajouter</a></div>
					<div class="col m6 s12 center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/notification/sup">Supprimer</a></div>
				</div><hr><br>

				<div class="row">
					<div class="card" style="padding: 20px 20px 0 20px;">
						<span class="card-title">Supprimer une Notification (Nouveautés)</span>
						<table class="responsive-table">
							<thead>
								<tr>
									<th style="width: 80%;">Texte</th>
									<th style="width: 20%;"></th>
								</tr>
							</thead>

							<tbody>
								@foreach($nouveautes as $nouveaute)
									<tr>
										<td>{{$nouveaute->contenu}}</td>
										<td class="center">
											<form method="post" action="/admin/notification/sup/{{$nouveauteee->id}}">
												{{ csrf_field() }}
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

				<br>
				
				<div class="row">
					<div class="card" style="padding: 20px 20px 0 20px;">
						<span class="card-title">Supprimer une Notification (Important)</span>
						<table class="responsive-table">
							<thead>
								<tr>
									<th style="width: 80%;">Texte</th>
									<th style="width: 20%;"></th>
								</tr>
							</thead>

							<tbody>
								@foreach($importants as $important)
									<tr>
										<td>{{$important->contenu}}</td>
										<td class="center">
											<form method="post" action="/admin/notification/sup/{{$important->id}}">
												@method('DELETE')
												{{ csrf_field() }}
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

				<br>

				<div class="row">
					<div class="card" style="padding: 20px 20px 0 20px;">
						<span class="card-title">Supprimer une Notification (Rendez-vous !)</span>
						<table class="responsive-table">
							<thead>
								<tr>
									<th style="width: 80%;">Texte</th>
									<th style="width: 20%;"></th>
								</tr>
							</thead>

							<tbody>
								@foreach($rendezvous as $rdv)
									<tr>
										<td>{{$rdv->contenu}}</td>
										<td class="center">
											<form method="post" action="/admin/notification/sup/{{$rdv->id}}">
												@method('DELETE')
												{{ csrf_field() }}
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

				@include('layouts.success')
				@include('layouts.errors')
				
			</div>
		</div>

@endsection