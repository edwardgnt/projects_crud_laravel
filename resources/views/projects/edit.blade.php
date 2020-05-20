@extends('layout')

@section('content')

<h1>Edit Project</h1>

<form method="POST" action="/projects/{{ $project->id }}">
    @method('PATCH')
    @csrf

    <div>
        <label for="title">Title</label>

        <div>
            <input type="text" name="title" placeholder="Title" value="{{ $project->title }}">
        </div>
    </div>

    <div>
        <label for="description">Description</label>

        <div>
            <textarea name="description" cols="30" rows="10">{{ $project->description }}</textarea>
        </div>
    </div>

    <div>
        <button class="submit">Update Project</button>
    </div>
</form>

<br>
<form method="POST" action="/projects/{{ $project->id }}">
    @method('DELETE')
    @csrf 

    <div>
        <button class="submit">Delete Project</button>
    </div>
</form>

@endsection
