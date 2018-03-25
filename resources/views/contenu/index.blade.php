@extends('layouts.master')

@section('content')

<div class="row">
			<div class="col m3 s12 center" style="padding-top: 10px;"><a class="btn button-validation-contenu" href="/contenu/?region=Algérie">Algérie</a></div>
			<div class="col m3 s12 center" style="padding-top: 10px;"><a class="btn button-validation-contenu" href="/contenu/?region=Afrique">Afrique</a></div>
			<div class="col m3 s12 center" style="padding-top: 10px;"><a class="btn button-validation-contenu" href="/contenu/?region=Moyen Orient">Moyen Orient</a></div>
			<div class="col m3 s12 center" style="padding-top: 10px;"><a class="btn button-validation-contenu" href="/contenu/?region=Monde">Monde</a></div>
		</div><hr style="border-color: white;">

		<div class="row">
			<div class="col m3 s12 center">
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="/contenu/?categorie=Culture et éducation">Culture et éducation</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="/contenu/?categorie=Droit de l'homme humanitaire">Droit de l'homme / humanitaire</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="/contenu/?categorie=Philo-idéologie-politique">Philo-idéologie-politique</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="/contenu/?categorie=Pétition Déclaration">Pétition / Déclaration</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="/contenu/?categorie=Associations">Associations</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="/contenu/?categorie=Patrimoine">Patrimoine</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="/contenu/?categorie=Géo-stratégie">Géo-stratégie</a></div>
				<div style="padding-top: 10px;"><a class="btn button-validation-contenu" href="/contenu/?categorie=Sub-alterne-studies">Sub-alterne-studies</a></div>
			</div>

			<div class="col m9 s12" style="padding: 0;">
				<div class="card-panel">

					<div class="row">
						<form method="post" action="/contenu">
							{{csrf_field()}}
							<div class="col s10">
								<input type="text" name="recherche" placeholder="Recherche...">
							</div>
							<div class="col s2">
								<a class="btn button-validation-contenu" style="width: 100%; margin-top: 5px;"><i type="submit" class="material-icons">search</i></a>
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
									<td><a href="/download/{{$contenu->id}}">{{$contenu->nom}}</a></td>
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