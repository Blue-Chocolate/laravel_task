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

    <h1 class="text-success mx-5 my-3">Update course Data</h1>

    <form method="Post" action="{{ route('courses.update',$course) }}" class="w-75 border m-auto p-3">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="course Name" class="form-label">Name address</label>
            <input name="name" type="text" class="form-control" id="course Name"  value="{{ old('name', $course->name) }}">

        </div>


        <div class="mb-3">
            <label for="course description" class="form-label">description address</label>
            <input name="description" type="text" class="form-control" id="course description"  value="{{ old('description', $course->description) }}">

        </div>


        <div class="mb-3">
            <label for="course logo" class="form-label">logo</label>
            <input name="logo" type="file" class="form-control" id="course logo"  value="{{ old('logo', $course->logo) }}">
        </div>

  </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <x-bootstrap-j-s></x-bootstrap-j-s>

</body>

</html>