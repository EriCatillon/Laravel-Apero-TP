@extends('master.master')

@section('navbar')
<a class="navbar-brand" href="{{ URL::to('aperos') }}">Page d'accueil</a>
<a class="navbar-brand" href="">Rechercher apéro</a>
<a class="navbar-brand" href="{{ URL::to('logout') }}">Logout</a>
@stop

@section('content')
{{ Form::open(array('url' => 'connect','class'=>'form-horizontal')) }}
<h1>Poster un event</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('title') }}
    {{ $errors->first('email') }}
</p>

<div class="control-group">
	{{ Form::label('title', 'title') }}
	<div class="controls">
		{{ Form::text('title', Input::old('title'), array('placeholder' => 'awesome')) }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('content', 'content') }}
	<div class="controls">
		{{ Form::textarea('content', Input::old('content'), array('placeholder' => 'awesome')) }}
	</div>
</div>   
    
<div class="control-group">
	{{ Form::label('status', 'status') }}
	<div class="controls">
		{{ Form::select('status', array('unpublish' => 'unpublish', 'publish' => 'publish')); }}
	</div>
</div>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}
@stop
