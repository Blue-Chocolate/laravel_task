<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create course</title>
    <x-bootstrap-css></x-bootstrap-css>
</head>

<body>
    <x-nav-bar></x-nav-bar>

    <h1 class="text-success mx-5 my-3">Create New course</h1>

    <form method="POST" action="{{ route('courses.store') }}" class="w-75 border m-auto p-3" enctype="multipart/form-data">
        @csrf
        {{-- name --}}
        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
            <label for="course Name" class="form-label">Name address</label>
            <input name="name" type="text" class="form-control" id="course Name">

        </div>

        {{-- description --}}
        @error('description')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
            <label for="course description" class="form-label">description address</label>
            <input name="description" type="text" class="form-control" id="course description">

        </div>

        {{-- logo --}}
        <div class="mb-3">
            <label for="courselogo" class="form-label">Logo</label>
            <input name="logo" type="file" class="form-control" id="courselogo">
        </div>

        @foreach ($tracks as $track)
        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            <input name="track[]" value="{{$track->id}}" type="checkbox" class="btn-check" id="btncheck{{$track->id}}" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck{{$track->id}}">{{$track->name}}</label>
        </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <x-bootstrap-j-s></x-bootstrap-j-s>
</body>

</html>