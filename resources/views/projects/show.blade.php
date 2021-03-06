@extends('layout')

@section('content')

<h1>{{ $project->title }}</h1>

<div>
    {{ $project->description }}
    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>
</div>

@if($project->tasks->count())
<div>
    <h3>Tasks:</h3>
    @foreach ($project->tasks as $task)
    <div>
        <form method="POST" action="/tasks/{{ $task->id }}">

            @method('PATCH')
            @csrf

            <label for="completed" class=" {{ $task->completed ? 'is-complete' : '' }}">
                <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                {{ $task->description }}
            </label>
        </form>
    </div>
    @endforeach
</div>
@endif


@endsection
