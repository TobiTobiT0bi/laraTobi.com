
    <h1 class='text-center p-3 pt-5 text-white'> {{ strtoupper($routeVariable) }} CRUD</h1>
    <div class="rounded container bg-dark pb-3">
        <div class="container-md">
            <a href="{{ route($routeVariable . '.create') }}" class="btn btn-success mt-3 mb-3 me-3">CREATE</a>
        </div>

        <div class="container-sm">
            <table class="table table-dark">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>NAME</th>
                        @if ($routeVariable !== 'brands')
                            <th>{{ strtoupper($conditionalTitle) }}</th>
                            @if ($routeVariable == 'products')
                                <th>{{ strtoupper($secondAttr)}}</th>
                                <th>{{ strtoupper($price)}}</th>
                            @endif
                        @endif
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objects as $obj)
                        <tr class="text-center">
                            <td>{{ $obj->id }}</td>
                            <td>{{ $obj->$name }}</td>
                            @if ($routeVariable == 'products')
                                <td>{{ $obj->brand->brand }}</td>
                            @endif
                            @if ($routeVariable !== 'brands')
                                <td>{{ $obj->$secondAttr ?? '' }}</td>
                            @endif
                            @if ($routeVariable == 'products')
                                <td>{{ $obj->$price ?? '' }}</td>
                            @endif

                            {{-- @foreach ($classes as $class)
                                <td>{{ $product->class_id == $class->id ? $class->id :  }}</td>
                            @endforeach --}}
                            {{-- <td>{{ $product->age }}</td> --}}

                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route($routeVariable . '.edit', $obj->id) }}"
                                        class="btn btn-primary mt-1 me-1 pe-3 ps-3">EDIT</a>
                                    <form action="{{ route($routeVariable . '.destroy', $obj->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type='submit' class="btn btn-danger mt-1 me-1 pe-3 ps-3">DELETE</button>
                                    </form>
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
                    form.action = '/' + routeVariable + '/' + id;
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
