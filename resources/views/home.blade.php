@extends('layouts.master')

@section('content')
<h1 class="center-align">Accueil</h1>
	<div class="row">
		<div class="col s3">

			@if(auth()->check())

				{{auth()->user()->name}}

			@endif
		</div>

		@if(auth()->check())
		<div class="col s3">
			
			<a href="/logout"><button class="btn waves-effect waves-light">Logout</button></a>

		</div>
		@endif
		

		@if(!auth()->check())
		<div class="col s3">
			
			<a href="/connexion"><button class="btn waves-effect waves-light">Connexion</button></a>

		</div>

		<div class="col s3">
			
			<a href="/inscription"><button class="btn waves-effect waves-light">Inscription</button></a>

		</div>
		@endif
	</div>
@endsection

