<h2 class="text-center p-3 pt-5">
    {{ $actionProd }}
</h2>

<div class="container-xxl bg-dark text-white">
    <div class="d-flex justify-content-center">
        <div class="col align-self-center">
            <form method="POST" action="{{ route('products.' . $routeVariable, $product->id ?? null) }}">
                @csrf
                @if ($method !== 'POST')
                    @method($method)
                @endif

                <div class="mb-5">
                    <label for="title" class="form-label">title</label>
                    <input type="text" name="title" value="{{ old('title', $product->title ?? '') }}" id="title" class="form-control bg-transparent text-white" {{ $disabled }} {{ $required }}>
                </div>

                <div class="mb-5">
                    <label for="description" class="form-label">description</label>
                    <input type="text" name="description" value="{{ old('description', $product->description ?? '') }}" id="description" class="form-control bg-transparent text-white" {{ $disabled }} {{ $required }}>
                </div>

                <div class="mb-5">
                    <label for="price" class="form-label">price</label>
                    <input type="text" name="price" value="{{ old('price', $product->price ?? '') }}" id="price" class="form-control bg-transparent text-white" {{ $disabled }} {{ $required }}>
                </div>

                <div class="mb-5">
                    <label for="brand_id" class="form-label">Brand</label>
                    <select name="brand_id" id="brand_id" class="form-select" {{ $disabled }}>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{ old('brand_id', $product->brand_id ?? '') == $brand->id ? 'selected' : '' }}>{{ $brand->brand }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success mt-1 pe-3 ps-3" {{ $hidden }}> {{ $action }} </button>
                <a href="{{ route('products.index') }}" class="btn btn-danger mt-1 pe-3 ps-3">Cancel</a>
            </form>
        </div>
    </div>
</div>
