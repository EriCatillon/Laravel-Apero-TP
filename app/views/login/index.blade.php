@extends('master.master')

@section('navbar')
<a class="navbar-brand" href="{{ URL::to('aperos') }}">Page d'accueil</a>
<a class="navbar-brand" href="">Rechercher apéro</a>
<a class="navbar-brand" href="{{ URL::to('login') }}">Se connecter </a>
@stop

@section('content')
{{ Form::open(array('url' => 'login','class'=>'form-horizontal')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('username') }}
    {{ $errors->first('password') }}
</p>


<div class="control-group">
	{{ Form::label('username', 'username') }}
	<div class="controls">
		{{ Form::text('username', Input::old('username'), array('placeholder' => 'awesome')) }}
	</div>
</div>


<div class="control-group">
	{{ Form::label('password', 'Password') }}
	<div class="controls">
		{{ Form::password('password') }}
	</div>
</div>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}
@stop
