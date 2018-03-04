@extends('layouts.masteradmin')
@section('content')

<div class="col s12 m6">
	<h4 class="center">Menu</h4>
	<div class="row">	
		<div class="center col s12 m4 offset-m4">
			<div class="center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/article/ajout">Article</a></div>
			<div class="center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/contenu/ajout">Contenu</a></div>
			<div class="center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/notification/ajout">Notification</a></div>
			<div class="center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/admin/utilisateur/sup">Utilisateurs</a></div>
			<div class="center" style="padding-top: 10px;"><a class="btn button-validation-admin" href="/">Site NAQD</a></div>
		</div>
	</div>
</div>

@endsection