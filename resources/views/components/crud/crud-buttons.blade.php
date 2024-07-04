@props(['routeVariable', 'object'])

<td>
    <div class="d-flex justify-content-center">
        <a href="{{ route($routeVariable . '.edit', $object->id) }}"
            class="btn btn-primary mt-1 me-1 pe-3 ps-3">EDIT</a>
        <form action="{{ route($routeVariable . '.destroy', $object->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type='submit' class="btn btn-danger mt-1 me-1 pe-3 ps-3">DELETE</button>
        </form>
    </div>
</td>
