@extends('layouts.masteradmin')

@section('content')


		@include('layouts.adminSidebar')

			<div class="col m9 s12"><br>
				<div class="card" style="padding: 20px 20px 0 20px;">
					<span class="card-title">Supprimer un Utilisateur</span>
					<table class="responsive-table">
						<thead>
							<tr>
								<th style="width: 40%;">Nom Complet</th>
								<th style="width: 40%;">Email</th>
								<th style="width: 20%;"></th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>NomCompletDeL'utilisateur</td>
								<td>nomComplet@adresse.com</td>
								<td class="center">
									<form method="post">
										<input type="hidden" name="" value="">
										<button class="btn" type="submit" name="action"><i class="material-icons">close</i>
										</button>
									</form>
								</td>
							</tr>
							<tr>
								<td>NomCompletDeL'utilisateur</td>
								<td>nomComplet@adresse.com</td>
								<td class="center">
									<form method="post">
										<input type="hidden" name="" value="">
										<button class="btn" type="submit" name="action"><i class="material-icons">close</i>
										</button>
									</form>
								</td>
							</tr>
							<tr>
								<td>NomCompletDeL'utilisateur</td>
								<td>nomComplet@adresse.com</td>
								<td class="center">
									<form method="post">
										<input type="hidden" name="" value="">
										<button class="btn" type="submit" name="action"><i class="material-icons">close</i>
										</button>
									</form>
								</td>
							</tr>
							<tr>
								<td>NomCompletDeL'utilisateur</td>
								<td>nomComplet@adresse.com</td>
								<td class="center">
									<form method="post">
										<input type="hidden" name="" value="">
										<button class="btn" type="submit" name="action"><i class="material-icons">close</i>
										</button>
									</form>
								</td>
							</tr>
						</tbody>
					</table>

					<ul class="pagination">
						<li class="left"><a href="#"><i class="material-icons">chevron_left</i></a></li>
						<li class="right"><a href="#"><i class="material-icons">chevron_right</i></a></li>
					</ul>

				</div>
			</div>
		</div>


@endsection