@extends('layouts.masteradmin')


@section('content')

	<div class="col s12 m6">

			<h4 class="center">Menu</h4>
				<div class="row">	
						<div class="center col s12 m4 offset-m4">
							<a class="btn button-validation-admin" style="margin-bottom:0.5em" href="/admin/article/ajout">Article</a><br>
							<a class="btn button-validation-admin" style="margin-bottom:0.5em" href="/admin/contenu/ajout">Contenu</a><br>
							<a class="btn button-validation-admin" style="margin-bottom:0.5em" href="/admin/notification/ajout">Notification</a><br>
							<a class="btn button-validation-admin" style="margin-bottom:0.5em" href="/admin/utilisateur/sup">Utilisateurs</a><br>
							<a class="btn button-validation-admin" style="margin-bottom:0.5em" href="/">Site NAQD</a><br>
						</div>
				</div>
	</div>

@endsection