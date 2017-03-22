@extends('layout.template')
@section('title', 'Edit this project')

@section('content')
<h4>Edit '<i>{{ $project->name }}</i>' project</h4>
<hr>
{{ Form::open(['url' => 'projects/'.$project->id.'/edit', 'method' => 'put', 'class' => 'center']) }}
	{{ Form::label('name', 'Name:') }}
	{{ Form::text('name', $project->name) }}
	<br>

	{{ Form::label('author', 'Author:') }}
	{{ Form::text('author', $project->author) }}
	<br>

	{{ Form::label('language', 'Language:') }}
	{{ Form::text('language', $project->language) }}
	<br>

	{{ Form::label('price', 'Price:') }}
	{{ Form::number('price', $project->price) }}
	<br>

	<hr>
	{{ Form::submit('Edit') }}
{{ Form::close() }}
@endsection