@extends('layouts.master')

@section('content')

<div class="row">
			<div class="col m3 s12 center" style="padding-top: 10px;"><a class="btn button-validation-contenu" href="#">Algérie</a></div>
			<div class="col m3 s12 center" style="padding-top: 10px;"><a class="btn button-validation-contenu" href="#">Afrique</a></div>
			<div class="col m3 s12 center" style="padding-top: 10px;"><a class="btn button-validation-contenu" href="#">Moyen Orient</a></div>
			<div class="col m3 s12 center" style="padding-top: 10px;"><a class="btn button-validation-contenu" href="#">Monde</a></div>
		</div><hr style="border-color: white;">

		<div class="row">
			<div class="col m3 s12 center">
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="#">Culture et éducation</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="#">Droit de l'homme / humanitaire</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="#">Philo-idéologie-politique</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="#">Pétition / Déclaration</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="#">Associations</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="#">Patrimoine</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="#">Géo-stratégie</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="#">Sub-alterne-studies</a></div>
			</div>

			<div class="col m9 s12" style="padding: 0;">
				<div class="card-panel">

					<div class="row">
						<form method="post">
							<div class="col s10">
								<input type="text" name="recherche" placeholder="Recherche...">
							</div>
							<div class="col s2">
								<a class="btn button-validation-contenu" style="width: 100%; margin-top: 5px;"><i class="material-icons">search</i></a>
							</div>
						</form>
					</div>

					<table class="responsive-table">
						<thead>
							<tr>
								<th style="width: 55%;">Nom</th>
								<th style="width: 20%;">Region</th>
								<th style="width: 25%;">Categorie</th>
							</tr>
						</thead>

						<tbody>
							@foreach($contenus as $contenu)
								<tr>
									<td><a href="#">{{$contenu->nom}}</a></td>
									<td>{{$contenu->region}}</td>
									<td>{{$contenu->categorie}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>
		</div><br>
@endsection