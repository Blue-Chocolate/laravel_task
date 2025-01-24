<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Students Data</title>
</head>

<body>
    <a href="{{ route('studentcreate') }}"><button class="btn btn-info">Create Student</button></a>
    <table class="table table-bordered w-75 m-auto">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">track</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($students as $student )
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->track->name }}</td>
                <td class="d-flex"><a href={{ route('Studentsview', $student->id) }}><button class="btn btn-warning">View</button></a>


                    <form action="{{ route('Studentsdelete', $student->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{route('studentedit',$student->id)  }}">
                    <button
                    class="btn btn-Success">Update</button>
                </a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>

<br><br>
    <a href="{{route('tracksindex')  }}">
                    <button
                    class="btn btn-dark d-flex justify-content-center m-5">Go to tracks</button>
                </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>