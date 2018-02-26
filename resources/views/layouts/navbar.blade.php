<nav class="nav-extended">
			<div class="nav-wrapper">
				<a href="accueil.php" class="brand-logo center">NAQD</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul id="nav-mobile" class="left hide-on-med-and-down">
					<li><a href="/">Accueil</a></li>
					<li><a href="/contenu">Contenu</a></li>
					<li><a href="#">Aide</a></li>
				</ul>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					@if(auth()->check())
					<li><a href="/profil">Profil</a></li>
					<li><a href="/logout">Déconnexion</a></li>
					@else
					<li><a href="/inscription">Inscription</a></li>
					<li><a href="/connexion">Connexion</a></li>

					@endif

					
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<h4 class="titre-menu-vertical">Menu Principale</h4>
					<li><a href="/">Accueil</a></li>
					<li><a href="/contenu">Contenu</a></li>
					<li><a href="#">Aide</a></li>
					@if(auth()->check())
					<li><a href="/profil">Profil</a></li>
					<li><a href="/logout">Déconnexion</a></li>
					@else
					<li><a href="/inscription">Inscription</a></li>
					<li><a href="/connexion">Connexion</a></li>

					@endif
				</ul>
			</div>
</nav>