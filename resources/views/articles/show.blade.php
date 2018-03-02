@extends('layouts.master')

@section('content')	
	<div class="formulaire-fond"><a class="btn-floating btn-large button-validation" href="/" title="vers l'accueil"><i class="material-icons">arrow_back</i></a></div>

		<div class="row">
			<div class="card center-align col m6 offset-m3">
				<div class="card-content">
					<span class="card-title">{{$article->titre}}</span><hr>
					<p>{{$article->contenu}}</p>
				</div>
			</div>
		</div>

@endsection