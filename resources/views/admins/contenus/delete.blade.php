@extends('layouts.masteradmin')


@section('content')

		@include('layouts.adminSidebar')

			<div class="col m9 s12">
				<div class="row "><hr>
					<div class="col m6 s12 center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/contenu/ajout">Ajouter</a></div>
					<div class="col m6 s12 center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/contenu/sup">Supprimer</a></div>
				</div><hr><br>
				
				<div class="row">
					<div class="card" style="padding: 20px 20px 0 20px;">
						
						<span class="card-title">Supprimer du Contenu</span>
						<table class="responsive-table">
							<thead>
								<tr>
									<th style="width: 80%;">Nom</th>
									<th style="width: 20%;"></th>
								</tr>
							</thead>

							<tbody>
								@foreach($contenus as $contenu)
									<tr>
										<td><a href="#">{{$contenu->nom}}</a></td>
										<td class="center">
											<form method="post" action="/admin/contenu/sup/{{$contenu->id}}">
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

				@include('layouts.errors')
				@include('layouts.success')
				
			</div>
		</div>


@endsection