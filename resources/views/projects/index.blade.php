@extends('layout.template')

@section('title', 'List all')

@section('content')
<h4>List of all projects</h4>
<hr>
@if( count($projects) > 0 )
	<div class="center">
		<h4>You have {{ count($projects) }} projects!</h4>
		<small>(Click on project name to display details)</small>
		<hr>
	</div>
	@foreach($projects as $project)
	<div style="text-align: left;">
		<h4 class="title">
			<a href="{{ url('/projects/'.$project->id) }}">
				> ({{$project->language}}) {{$project->name}}
			</a>
		</h4>
		<p>By <i>{{$project->author}}</i></p>
		<p class="price">U$ {{$project->price}}</p>

		<div class="description-top">
			<small>Created at: {{ $project->created_at }}</small>
			<br>
			<small>Updated at: {{ $project->updated_at }}</small>
		</div>

		<div class="description-bottom">
			<a href="{{ url('projects/'.$project->id.'/edit') }}">
				<button>Update</button>
			</a>

			{{Form::open(['url' => '/projects/'.$project->id.'/destroy', 'method' => 'DELETE'])}}
				<button>Delete</button>
			{{Form::close()}}
		</div>
	</div>
	<hr>
	@endforeach
@else
	<h3>No projects</h3>
@endif
@endsection