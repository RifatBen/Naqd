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
											<form method="post">
												<input type="hidden" name="" value="">
												<button class="btn" type="submit" name="action"><i class="material-icons">close</i>
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>

						<ul class="pagination">
							<li class="left"><a href="#"><i class="material-icons">chevron_left</i></a></li>
							<li class="right"><a href="#"><i class="material-icons">chevron_right</i></a></li>
						</ul>

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
											<form method="post">
												<input type="hidden" name="" value="">
												<button class="btn" type="submit" name="action"><i class="material-icons">close</i>
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>

						<ul class="pagination">
							<li class="left"><a href="#"><i class="material-icons">chevron_left</i></a></li>
							<li class="right"><a href="#"><i class="material-icons">chevron_right</i></a></li>
						</ul>

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
											<form method="post">
												<input type="hidden" name="" value="">
												<button class="btn" type="submit" name="action"><i class="material-icons">close</i>
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>

						<ul class="pagination">
							<li class="left"><a href="#"><i class="material-icons">chevron_left</i></a></li>
							<li class="right"><a href="#"><i class="material-icons">chevron_right</i></a></li>
						</ul>

					</div>
				</div>
			</div>
		</div>

@endsection