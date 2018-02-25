@extends('layouts.master')

@section('content')
<div class="row">
			<div class="carousel carousel-slider center" data-indicators="true">
				<div class="carousel-item red white-text" href="#one!">
					<h2>Premier Panneau</h2>
					<p class="white-text">C'est votre premier panneau</p>
				</div>
				<div class="carousel-item amber white-text" href="#two!">
					<h2>Deuxieme Panneau</h2>
					<p class="white-text">C'est votre deuxieme panneau</p>
				</div>
				<div class="carousel-item green white-text" href="#three!">
					<h2>Troisieme Panneau</h2>
					<p class="white-text">C'est votre troisieme panneau</p>
				</div>
				<div class="carousel-item blue white-text" href="#four!">
					<h2>Quatrieme Panneau</h2>
					<p class="white-text">C'est votre quatrieme panneau</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col m3">
				<ul class="collapsible" data-collapsible="accordion" style="width: 100%">
					<li>
						<div class="collapsible-header active">Nouveautés</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>
					<li>
						<div class="collapsible-header">Important</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>
					<li>
						<div class="collapsible-header">Rendez-vous !</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>
				</ul>
			</div>

			<div class="col m9">


				@foreach($articles as $article)

				<div class="row">
					<div class="col s12 m6">
						<div class="card card-accueil">
							<div class="card-content">
								<span class="card-title"><a href="#">{{ $article->titre }}</a></span><hr>
								<p>{{ }}</p>
							</div>
						</div>
					</div>
	
				@endforeach

					
				</div>
			</div>
		</div>


@endsection