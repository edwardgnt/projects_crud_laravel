@extends('layout')

@section('content')

<h1>{{ $project->title }}</h1>

<div>
    {{ $project->description }}
</div>

<div>
    <h3>Tasks:</h3>
    @foreach ($project->tasks as $task)
    <li>{{ $task->description }}</li>

    @endforeach
</div>

<p>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
</p>

@endsection
