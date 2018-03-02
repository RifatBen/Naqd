@extends('layouts.masternone')
@section('content')

<div class="formulaire-fond"><a class="btn-floating btn-large button-validation" href="/" title="vers l'accueil"><i class="material-icons">arrow_back</i></a></div>
		<div class="formulaire-fond-2 right-align">
			<a target="_blank" href="https://www.facebook.com/naqd.critic"><img src="svg/facebook.svg" class="image-svg"></a>
			<a target="_blank" href="https://www.youtube.com/channel/UCofjVJeU-O5SBAEQnl1GexQ"><img src="svg/youtube.svg" class="image-svg"></a>
		</div>

		<div class="row">
			<div class="card center-align col m6 offset-m3">
				<div class="card-content">
					<span class="card-title">{{$article->titre}}</span><hr>
					<p>{{$article->contenu}}</p>
				</div>
			</div>
		</div>

@endsection