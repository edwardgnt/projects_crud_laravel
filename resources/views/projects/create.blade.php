<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">
        @csrf
        <div>
            <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" value="{{ old('title') }}"
                placeholder="Project Title">
        </div>
        <div>
            <textarea name="description" class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}"
                placeholder="Project description" cols="30" rows="10">{{ old('description') }}</textarea>
        </div>
        <div>
            <button type="submit">Create Project</button>
        </div>


        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>

</body>

</html>
