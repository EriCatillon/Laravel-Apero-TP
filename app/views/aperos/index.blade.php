@extends('master.master')

@section('navbar')
<a class="navbar-brand" href="{{ URL::to('aperos') }}">Page d'accueil</a>
<a class="navbar-brand" href="">Rechercher apéro</a>
<a class="navbar-brand" href="{{ URL::to('login') }}">Se connecter </a>
@stop

@section('content')
    @foreach ($aperos as $apero)
	<a href="aperos/{{ $apero->id }}"><h1>{{ $apero->title }}</h1></a>
    <p>{{ $apero->content }}</p>
    <a href="aperos/{{ $apero->id }}">lire la suite</a>
	@endforeach

	
@stop
	{{ $aperos->links() }}
