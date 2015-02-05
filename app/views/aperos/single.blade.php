@extends('master.master')

@section('navbar')
<a class="navbar-brand" href="{{ URL::to('aperos') }}">Page d'accueil</a>
<a class="navbar-brand" href="">Rechercher apéro</a>
<a class="navbar-brand" href="{{ URL::to('login') }}">Se connecter </a>
@stop

@section('content')
    <h1>{{ $aperos->title }}</h1>
    <p>{{ $aperos->content }}</p>
@stop
