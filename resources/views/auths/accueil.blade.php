@extends('layouts.master')
@section('content')

@if(auth()->check())
	<h3>Bienvenue {{auth()->user()->nom}}</h3>
@endif

@endsection