@extends('layouts.app')
@section('content')
    <h1 class='text-center p-3 pt-5 text-white'>CRUD de estudiantes</h1>
    <div class="rounded container bg-dark pb-3">
        <div class="container-md">
            <a href="{{ route('products.create') }}" class="btn btn-success mt-3 mb-3 me-3">CREATE</a>
        </div>

        <div class="container-sm">
            <table class="table table-dark">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>title</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="text-center">
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            {{-- @foreach ($classes as $class)
                                <td>{{ $product->class_id == $class->id ? $class->id :  }}</td>
                            @endforeach --}}
                            {{-- <td>{{ $product->age }}</td> --}}

                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-primary mt-1 me-1 pe-3 ps-3">EDIT</a>
                                    <button type="button" onclick="confirmDelete('{{ $product->id }}')"
                                        class="btn btn-danger mt-1 pe-3 ps-3">DELETE</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            alertify.confirm("¿Confirm delete record?", function(e) {
                if (e) {
                    let form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/products/' + id;
                    form.innerHTML = '@csrf @method('DELETE')';
                    document.body.appendChild(form);
                    form.submit();
                } else {
                    alertify.error('Cancel');
                    return false;
                }
            });
        }
    </script>
@endsection
