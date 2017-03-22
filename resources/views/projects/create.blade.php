@extends('layout.template')
@section('title', 'Create new')

@section('content')
<h4>Create a new project</h4>
<hr>
{{ Form::open(['url' => 'projects/create', 'method' => 'post', 'class' => 'center']) }}
	{{ Form::label('name', 'Name:') }}
	{{ Form::text('name', null) }}
	<br>

	{{ Form::label('author', 'Author:') }}
	{{ Form::text('author', null) }}
	<br>

	{{ Form::label('language', 'Language:') }}
	{{ Form::text('language', null) }}
	<br>

	{{ Form::label('price', 'Price:') }}
	{{ Form::number('price', null) }}
	<br>

	<hr>
	{{ Form::submit('Save') }}
{{ Form::close() }}
@endsection