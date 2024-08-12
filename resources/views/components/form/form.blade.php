@props(['method', 'type', 'action', 'routeVariable', 'routeAction', 'name', 'object'])

<h2 class="text-center p-3 pt-5">
    {{ $type }}
</h2>

<div class="container-xxl bg-dark text-white">
    <div class="d-flex justify-content-center">
        <div class="col align-self-center">
            <form method="{{ $method }}" action="{{ route( $routeVariable . '.' . $routeAction, $object->id ?? null) }}">
                @if ($method !== 'POST')
                    @method($method)
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li >{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf

                <div class="mb-5">
                    <label for="{{ $name }}" class="form-label"> {{ $name }}</label>
                    <input type="text" name="{{ $name }}" value="{{ old($name, $object->$name ?? '') }}" id="{{ $name }}" class="form-control bg-transparent text-white">
                </div>

                {{ $slot }}

                <button type="submit" class="btn btn-success mt-1 pe-3 ps-3"> {{ $action }} </button>
                <a href="{{ route( $routeVariable . '.index') }}" class="btn btn-danger mt-1 pe-3 ps-3">Cancel</a>
            </form>
        </div>
    </div>
</div>
