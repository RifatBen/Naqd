@extends('layouts.masteradmin')

@section('content')

	@include('layouts.adminSidebar')


			<div class="col m9 s12">
				<div class="row "><hr>
					<div class="col m6 s12 center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/contenu/ajout">Ajouter</a></div>
					<div class="col m6 s12 center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/contenu/sup">Supprimer</a></div>
				</div><hr><br>

				<div class="row">
					<div class="card">
						<div class="card-content">
							<span class="card-title">Ajouter du Contenu</span>

							<form method="post"> <!-- formulaire -->
								<div class="input-field">
									<input type="text" id="nom" name="nom">
									<label for="nom">Nom</label>
								</div>
								<div class="input-field">
									<select>
										<option value="" disabled selected>Choisissez votre option</option>
										<option value="">Algérie</option>
										<option value="">Afrique</option>
										<option value="">Moyen Orient</option>
										<option value="">Monde</option>
									</select>
									<label>Région</label>
								</div>
								<div class="input-field">
									<select>
										<option value="" disabled selected>Choisissez votre option</option>
										<option value="">Culture et éducation</option>
										<option value="">Droit de l'homme / humanitaire</option>
										<option value="">Philo-idéologie-politique</option>
										<option value="">Pétition / Déclaration</option>
										<option value="">Associations</option>
										<option value="">Patrimoine</option>
										<option value="">Géo-stratégie</option>
										<option value="">Sub-alterne-studies</option>
									</select>
									<label>Catégorie</label>
								</div>
								<div class="file-field input-field">
									<div class="btn button-validation" style="padding: 0 10px; font-size: 12px; border-radius: 15px;">
										<span>Fichier</span>
										<input type="file">
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