<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create student</title>
</head>

<body class="bg-dark text-white">

    <h2 class="text-center p-3 pt-5">
        Create students
    </h2>

    <div class="container-xxl bg-dark text-white">
        <div class="d-flex justify-content-center">
            <div class="col align-self-center">
                <form method="POST" action="{{ route('students.store') }}">
                    @csrf

                    <div class="mb-5">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control bg-transparent text-white" required>
                    </div>

                    <div class="mb-5">
                        <label for="name" class="form-label">Class ID</label>
                        <select name="class_id" id="class_id" class="form-select">
                            @foreach ($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->division }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" name="age" id="age" class="form-control bg-transparent text-white" required>
                    </div>

                    <button type="submit" class="btn btn-success mt-1 pe-3 ps-3">Save</button>
                    <a href="{{ route('students.index') }}" class="btn btn-danger mt-1 pe-3 ps-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
