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
				<div class="row">
					<div class="col s12 m6">
						<div class="card card-accueil">
							<div class="card-content">
								<span class="card-title"><a href="#">Article 1</a></span><hr>
								<p>Morbi nec magna vitae est mattis fermentum. Nam eu quam mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque aliquet vitae sapien non sagittis. Nulla sagittis mollis leo, sed pharetra tellus. Nulla accumsan lorem ut justo tincidunt, id molestie neque fringilla. Nullam tempor quis neque sit amet tincidunt. Phasellus venenatis mauris sed nibh ultricies mattis. Mauris gravida urna eget sagittis tincidunt. Phasellus imperdiet aliquet neque, a malesuada sapien pretium in. Ut nec pulvinar massa, a consequat enim. Donec vulputate metus leo, quis auctor felis iaculis in. Maecenas porttitor erat tortor, ac maximus mi euismod quis. Nulla mattis ex imperdiet lorem lobortis consequat.</p>
							</div>
						</div>
					</div>

					<div class="col s12 m6">
						<div class="card card-accueil">
							<div class="card-content">
								<span class="card-title"><a href="#">Article 2</a></span><hr>
								<p>Morbi nec magna vitae est mattis fermentum. Nam eu quam mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque aliquet vitae sapien non sagittis. Nulla sagittis mollis leo, sed pharetra tellus. Nulla accumsan lorem ut justo tincidunt, id molestie neque fringilla. Nullam tempor quis neque sit amet tincidunt. Phasellus venenatis mauris sed nibh ultricies mattis. Mauris gravida urna eget sagittis tincidunt. Phasellus imperdiet aliquet neque, a malesuada sapien pretium in. Ut nec pulvinar massa, a consequat enim. Donec vulputate metus leo, quis auctor felis iaculis in. Maecenas porttitor erat tortor, ac maximus mi euismod quis. Nulla mattis ex imperdiet lorem lobortis consequat.</p>
							</div>
						</div>
					</div>

					<div class="col s12 m6">
						<div class="card card-accueil">
							<div class="card-content">
								<span class="card-title"><a href="#">Article 3</a></span><hr>
								<p>Morbi nec magna vitae est mattis fermentum. Nam eu quam mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque aliquet vitae sapien non sagittis. Nulla sagittis mollis leo, sed pharetra tellus. Nulla accumsan lorem ut justo tincidunt, id molestie neque fringilla. Nullam tempor quis neque sit amet tincidunt. Phasellus venenatis mauris sed nibh ultricies mattis. Mauris gravida urna eget sagittis tincidunt. Phasellus imperdiet aliquet neque, a malesuada sapien pretium in. Ut nec pulvinar massa, a consequat enim. Donec vulputate metus leo, quis auctor felis iaculis in. Maecenas porttitor erat tortor, ac maximus mi euismod quis. Nulla mattis ex imperdiet lorem lobortis consequat.</p>
							</div>
						</div>
					</div>

					<div class="col s12 m6">
						<div class="card card-accueil">
							<div class="card-content">
								<span class="card-title"><a href="#">Article 4</a></span><hr>
								<p>Morbi nec magna vitae est mattis fermentum. Nam eu quam mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque aliquet vitae sapien non sagittis. Nulla sagittis mollis leo, sed pharetra tellus. Nulla accumsan lorem ut justo tincidunt, id molestie neque fringilla. Nullam tempor quis neque sit amet tincidunt. Phasellus venenatis mauris sed nibh ultricies mattis. Mauris gravida urna eget sagittis tincidunt. Phasellus imperdiet aliquet neque, a malesuada sapien pretium in. Ut nec pulvinar massa, a consequat enim. Donec vulputate metus leo, quis auctor felis iaculis in. Maecenas porttitor erat tortor, ac maximus mi euismod quis. Nulla mattis ex imperdiet lorem lobortis consequat.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


@endsection