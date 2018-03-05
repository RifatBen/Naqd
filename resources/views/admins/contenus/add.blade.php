@extends('layouts.masteradmin')

@section('content')

	@include('layouts.adminSidebar')


			<div class="col m9 s12">
				<div class="row "><hr>
					<div class="col m6 s12 center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/contenu/ajout">Ajouter</a></div>
					<div class="col m6 s12 center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/contenu/sup">Supprimer</a></div>
				</div><hr><br>
				

				<div class="row">

					@include('layouts.errors')
					@include('layouts.success')

					<div class="card">
						<div class="card-content">
							<span class="card-title">Ajouter du Contenu</span>
							<form method="post" action="/admin/contenu/ajout" enctype="multipart/form-data"> <!-- formulaire -->
								{{csrf_field()}}
								<div class="input-field">
									<input type="text" id="nom" name="nom">
									<label for="nom">Nom</label>
								</div>
								<div class="input-field">
									<select name="region">
										<option value="" disabled selected>Choisissez votre option</option>
										<option value="Algérie">Algérie</option>
										<option value="Afrique">Afrique</option>
										<option value="Moyen Orient">Moyen Orient</option>
										<option value="Monde">Monde</option>
									</select>
									<label for="region">Région</label>
								</div>
								<div class="input-field">
									<select name="categorie">
										<option value="" disabled selected>Choisissez votre option</option>
										<option value="Culture et éducation">Culture et éducation</option>
										<option value="Droit de l'homme humanitaire">Droit de l'homme / humanitaire</option>
										<option value="Philo-idéologie-politique">Philo-idéologie-politique</option>
										<option value="Pétition Déclaration">Pétition / Déclaration</option>
										<option value="Associations">Associations</option>
										<option value="Patrimoine">Patrimoine</option>
										<option value="Géo-stratégie">Géo-stratégie</option>
										<option value="Sub-alterne-studies">Sub-alterne-studies</option>
									</select>
									<label for="categorie">Catégorie</label>
								</div>
								
								<div class="file-field input-field">
									<div class="btn button-validation" style="padding: 0 10px; font-size: 12px; border-radius: 15px;">
										<span>Fichier</span>
										<input type="file" name="fichier">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text">
									</div>
								</div>
								<center><button class="btn button-validation" type="submit" name="">Valider</button></center>
							</form>
						
						</div>
					</div>
				</div>
			</div>
		</div>


@endsection