@if($errors->any())

	<div class="row red lighten-2 white-text">
		@foreach($errors->all() as $error)
			{{$error}} <br>
		@endforeach
	</div>

@endif