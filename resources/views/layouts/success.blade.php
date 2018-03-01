

@if(Session::has('Success'))
		<div class="row green lighten-1 center" style="size: 200%">
						{{Session::get('Success')}}
		</div>

@endif
