<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>tracks Data</title>
</head>

<body>
    <a href="{{ route('trackcreate') }}"><button class="btn btn-info">Create track</button></a>
    <table class="table table-bordered w-75 m-auto">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($tracks as $track )

            <tr>
                <td>{{ $track->id }}</td>
                <td>{{ $track->name }}</td>
                <td>{{ $track->description }}</td>
                <td class="d-flex"><a href={{ route('tracksview', $track->id) }}><button class="btn btn-warning">View</button></a>
                    <form action="{{ route('tracksdelete', $track->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Remove</button>
                    </form>
                    <a href="{{route('trackedit',$track->id)  }}">
                        <button
                            class="btn btn-Success">Update</button>
                    </a>

                </td>
            </tr>
            @endforeach


        </tbody>
    </table>



    <br><br>
    <a href="{{route('Studentsindex')  }}">
                    <button
                    class="btn btn-primary d-flex justify-content-center m-5">Go to students</button>
                </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>