<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-bootstrap-css></x-bootstrap-css>
    <title>courses Data</title>
</head>

<body>
    <x-nav-bar></x-nav-bar>
    <a class="d-flex justify-content-end m-5" href="{{ route('courses.create') }}"><button class="btn btn-info">Create a course</button></a>
    <table class="table table-bordered w-75 m-auto">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Logo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course )
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td class="w-25 h-25"><img class="w-100 h-100" src="{{asset('logos/' . $course->logo)}}" alt="course logo"></td>
                <td class="d-flex"><a href={{ route('courses.show', $course) }}><button class="btn btn-warning">View</button></a>
                    <form action="{{ route('courses.destroy', $course) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{route('courses.edit',$course)  }}">
                        <button
                            class="btn btn-Success">Update</button>
                    </a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>

    <div style="margin:10px;" class="d-flex justify-content-center">
        {{ $courses->links() }}
    </div>

   <x-bootstrap-j-s></x-bootstrap-j-s>

</body>

</html>