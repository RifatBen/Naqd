@extends('layouts.master')


@section('content')
		<div class="row">
			<div class="col s12 m8">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Ajouter du contenu</span>
						<form> <!-- formulaire -->

							{{csrf_field()}}
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

			<div class="col s12 m4">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Ajouter un article</span>
						<form form="post" action="/article"> <!-- formulaire -->

							{{csrf_field()}}
							<div class="input-field">
								<input type="text" id="titre" name="titre">
								<label for="titre">Titre</label>
							</div>
							<div class="input-field">
								<textarea id="contenu" class="materialize-textarea"></textarea>
								<label for="contenu">Contenu</label>
							</div>
							<center><button class="btn button-validation" type="submit" name="">Valider</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col s12 m4">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Ajouter une notification</span>
						<form> <!-- formulaire -->

							{{csrf_field()}}
							<div class="input-field">
								<input type="text" id="nouveautes" name="nouveautes">
								<label for="nouveautes">Nouveautés</label>
							</div>
							<center><button class="btn button-validation" type="submit" name="">Valider</button></center>
						</form>
					</div>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Ajouter une notification</span>
						<form> <!-- formulaire -->
								{{csrf_field()}}
							<div class="input-field">
								<input type="text" id="important" name="important">
								<label for="important">Important</label>
							</div>
							<center><button class="btn button-validation" type="submit" name="">Valider</button></center>
						</form>
					</div>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Ajouter une notification</span>
						<form> <!-- formulaire -->
							{{csrf_field()}}
							<div class="input-field">
								<input type="text" id="rendezvous" name="rendezvous">
								<label for="rendezvous">Rendez-vous !</label>
							</div>
							<center><button class="btn button-validation" type="submit" name="">Valider</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>

		<a class="btn button-validation" style="margin: 20px;" href="accueil.php">Retour vers le site</a>


@endsection