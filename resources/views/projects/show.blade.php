@extends('layout.template')
@section('title', 'Show this project')

@section('content')
<h4>Show '<i>{{ $project->name }}</i>' project</h4>
<hr>
{{ Form::open(['class' => 'center']) }}
	{{ Form::label('name', 'Name:') }}
	{{ Form::text('name', $project->name, ['disabled']) }}
	<br>

	{{ Form::label('author', 'Author:') }}
	{{ Form::text('author', $project->author, ['disabled']) }}
	<br>

	{{ Form::label('language', 'Language:') }}
	{{ Form::text('language', $project->language, ['disabled']) }}
	<br>

	{{ Form::label('price', 'Price:') }}
	{{ Form::number('price', $project->price, ['disabled']) }}
	<br>

	<hr>
	<a href="{{ url('/projects') }}">
		<button type="button">Back</button>
	</a>
{{ Form::close() }}
@endsection