<h2 class="text-center p-3 pt-5">
    {{ $actionCateg }}
</h2>

<div class="container-xxl bg-dark text-white">
    <div class="d-flex justify-content-center">
        <div class="col align-self-center">
            <form method="POST" action="{{ route('categories.' . $routeVariable, $category->id ?? null) }}">
                @csrf
                @if ($method !== 'POST')
                    @method($method)
                @endif

                <div class="mb-5">
                    <label for="parent_id" class="form-label">Parent</label>
                    <select name="parent_id" id="parent_id" class="form-select" {{ $disabled }}>
                        @if ($categories->count() == 0)
                            <option value='' selected>No parent</option>
                        @endif
                        @foreach ($categories as $parent_category)
                            <option value="{{ $parent_category->id }}" {{ old('category_id', $category->parent_id ?? '') == $parent_category->id ? 'selected' : '' }}>{{ $parent_category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label for="name" class="form-label">name</label>
                    <input type="text" name="name" value="{{ old('name', $category->name ?? '') }}" id="name" class="form-control bg-transparent text-white" {{ $disabled }} {{ $required }}>
                </div>

                <button type="submit" class="btn btn-success mt-1 pe-3 ps-3" {{ $hidden }}> {{ $action }} </button>
                <a href="{{ route('categories.index') }}" class="btn btn-danger mt-1 pe-3 ps-3">Cancel</a>
            </form>
        </div>
    </div>
</div>
