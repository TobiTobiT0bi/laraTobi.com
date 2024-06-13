<h2 class="text-center p-3 pt-5">
    {{ $actionBrand }}
</h2>

<div class="container-xxl bg-dark text-white">
    <div class="d-flex justify-content-center">
        <div class="col align-self-center">
            <form method="POST" action="{{ route('brands.' . $routeVariable, $brand->id ?? null) }}">
                @csrf
                @if ($method !== 'POST')
                    @method($method)
                @endif

                <div class="mb-5">
                    <label for="brand" class="form-label">name</label>
                    <input type="text" name="brand" value="{{ old('brand', $brand->brand ?? '') }}" id="brand" class="form-control bg-transparent text-white" {{ $disabled }} {{ $required }}>
                </div>

                <button type="submit" class="btn btn-success mt-1 pe-3 ps-3" {{ $hidden }}> {{ $action }} </button>
                <a href="{{ route('brands.index') }}" class="btn btn-danger mt-1 pe-3 ps-3">Cancel</a>
            </form>
        </div>
    </div>
</div>
