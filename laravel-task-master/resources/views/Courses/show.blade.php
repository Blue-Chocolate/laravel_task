<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-css></x-bootstrap-css>

    <title>Courses Data</title>
</head>

<body>
<x-nav-bar></x-nav-bar>
    {{-- @dump($Course) --}}

    <table class="table table-bordered w-75 m-auto">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>


            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td><img src="{{ $course->logo }}" alt="course Logo"></td>
                <td><a href={{ route('courses.index') }}><button class="btn btn-Info">Back</button></a></td>
            </tr>



        </tbody>
    </table>
    <x-bootstrap-j-s></x-bootstrap-j-s>

</body>

</html>