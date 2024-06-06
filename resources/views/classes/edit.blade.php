<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit class</title>
</head>

<body class="bg-dark text-white">

    <h2 class="text-center p-3 pt-5">
        Edit class
    </h2>

    <div class="container-xxl bg-dark text-white">
        <div class="d-flex justify-content-center">
            <div class="col align-self-center">
                <form method="POST" action="{{ route('classes.update', $class->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-5">
                        <label for="name" class="form-label">Division</label>
                        <input type="text" name="division" id="division" value="{{ old('division', $class->division) }}" class="form-control bg-transparent text-white" required>
                    </div>

                    <button type="submit" class="btn btn-success mt-1 pe-3 ps-3">Edit</button>
                    <a href="{{ route('classes.index') }}" class="btn btn-danger mt-1 pe-3 ps-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
