<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create track</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-first mx-6 my-3">Create New track</h1>

    <form method="Post" action="{{ route('trackstore') }}" class="w-75 border m-auto p-3">
        @csrf
        {{-- name --}}
        <div class="mb-3">
            <label for="track ID" class="form-label">Track ID</label>
            <input name="ID" type="text" class="form-control" id="track ID">

        </div>

        <div class="mb-3">
            <label for="track Name" class="form-label">Track Name</label>
            <input name="name" type="text" class="form-control" id="track Name">

        </div>
        

        {{-- description --}}
        <div class="mb-3">
            <label for="track description" class="form-label">Track description</label>
            <input name="description" type="text" class="form-control" id="track description">

        </div>

        {{-- image --}}
        <div class="mb-3">
            <label for="track Image" class="form-label">Image</label>
            <input name="image" type="text" class="form-control" id="track Image">
        </div>
        <div class="mb-3">
            <label for="track created_at" class="form-label">Track updated_at</label>
            <input updated_at="updated_at" type="text" class="form-control" id="track updated_at">

        </div>
        <div class="mb-3">
            <label for="track created_at" class="form-label">Track created_at</label>
            <input created_at="created_at" type="text" class="form-control" id="track created_at">

        </div>
       
        <button type="submit" class="btn btn-success    ">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>