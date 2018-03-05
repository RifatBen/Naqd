@extends('layouts.masteradmin')


@section('content')

			@include('layouts.adminSidebar')

			<div class="col m9 s12">
				<div class="row"><hr>
					<div class="col m6 s12 center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/article/ajout">Ajouter</a></div>
					<div class="col m6 s12 center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/article/sup">Supprimer</a></div>
				</div><hr><br>
				
				<div class="row">

					@include('layouts.errors')
					@include('layouts.success')

					<div class="card">
						<div class="card-content">
							<span class="card-title">Ajouter un Article</span>
							
							<form method="post" action="/admin/article/ajout"> <!-- formulaire -->
								{{csrf_field()}}
								<div class="input-field">
									<input type="text" id="titre" name="titre">
									<label for="titre">Titre</label>
								</div>
								<div class="input-field">
									<textarea name="contenu" id="contenu" class="materialize-textarea"></textarea>
									<label for="contenu">Contenu</label>
								</div>
								<center><button class="btn button-validation" type="submit" name="">Valider</button></center>
							</form>
						
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection