<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/alertify.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD</title>
</head>

<body class="bg-dark">

    <h1 class='text-center p-3 pt-5 text-white'>CRUD de estudiantes</h1>
    <div class="rounded container bg-dark pb-3">
        <div class="container-md">
            <a href="{{ route('students.create') }}" class="btn btn-success mt-3 mb-3 me-3">CREATE</a>
        </div>

        <div class="container-sm">
            <table class="table table-dark">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>NAME</th>
                        <th>CLASS ID</th>
                        <th>AGE</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr class="text-center">
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            @foreach ($classes as $class)
                                <td>{{ $student->class_id == $class->id ? $class->id :  }}</td>
                            @endforeach
                            <td>{{ $student->age }}</td>

                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary mt-1 me-1 pe-3 ps-3">EDIT</a>
                                    <button type="button" onclick="confirmDelete('{{ $student->id }}')" class="btn btn-danger mt-1 pe-3 ps-3">DELETE</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/alertify.min.js') }}"></script>

    <script>
        function confirmDelete(id) {
        alertify.confirm("¿Confirm delete record?", function (e) {
            if (e) {
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = '/students/' + id;
                form.innerHTML = '@csrf @method("DELETE")';
                document.body.appendChild(form);
                form.submit();
            } else {
                alertify.error('Cancel');
                return false;
                }
            });
        }
    </script>
</body>

</html>
