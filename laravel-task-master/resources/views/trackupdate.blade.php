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
    <h1 class="text-success mx-5 my-3">Update track Data</h1>

    <form method="Post" action="{{ route('trackupdate',$track->id) }}" class="w-75 border m-auto p-3">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="track Name" class="form-label">Name address</label>
            <input name="name" type="text" class="form-control" id="track Name"  value="{{ old('name', $track->name) }}">

        </div>


        <div class="mb-3">
            <label for="track description" class="form-label">description address</label>
            <input name="description" type="text" class="form-control" id="track description"  value="{{ old('description', $track->description) }}">

        </div>


        <div class="mb-3">
            <label for="track Image" class="form-label">Image</label>
            <input name="image" type="text" class="form-control" id="track Image"  value="{{ old('image', $track->image) }}">
        </div>

  </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>