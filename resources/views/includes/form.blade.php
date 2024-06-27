<h2 class="text-center p-3 pt-5">
    {{ $actionType }}
</h2>

<div class="container-xxl bg-dark text-white">
    <div class="d-flex justify-content-center">
        <div class="col align-self-center">
            <form method="POST" action="{{ route( $routeVariable . '.' . $routeAction, $object->id ?? null) }}">
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
                @if ($method !== 'POST')
                    @method($method)
                @endif

                <div class="mb-5">
                    <label for="{{ $name }}" class="form-label"> {{ $name }}</label>
                    <input type="text" name="{{ $name }}" value="{{ old($name, $object->$name ?? '') }}" id="{{ $name }}" class="form-control bg-transparent text-white" {{ $disabled }}>
                </div>

                @switch($routeVariable)
                    @case('categories')
                        <div class="mb-5">
                            <label for="parent_id" class="form-label">Parent</label>
                            <select name="parent_id" id="parent_id" class="form-select" {{ $disabled }}>
                                @foreach ($objects as $parent_category)
                                    <option value="{{ $parent_category->id }}" {{ old('category_id', $object->parent_id ?? '') == $parent_category->id ? 'selected' : '' }}>{{ $parent_category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @break
                    @case('products')
                        <div class="mb-5">
                            <label for="{{ $description }}" class="form-label">description</label>
                            <input type="text" name="{{ $description }}" value="{{ old($description, $object->$description ?? '') }}" id="{{ $description }}" class="form-control bg-transparent text-white" {{ $disabled }}>
                        </div>

                        <div class="mb-5">
                            <label for="price" class="form-label">price</label>
                            <input type="text" name="price" value="{{ old('price', $object->$price ?? '') }}" id="price" class="form-control bg-transparent text-white" {{ $disabled }}>
                        </div>

                        <div class="mb-5">
                            <label for="brand_id" class="form-label">Brand</label>
                            <select name="brand_id" id="brand_id" class="form-select" {{ $disabled }}>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ old('brand_id', $object->brand_id ?? '') == $brand->id ? 'selected' : '' }}>{{ $brand->brand }}</option>
                                @endforeach
                            </select>
                            @foreach ($categories as $category)
                                {{ $category->name }} <input type="checkbox" name="categories_id[]" value="{{ $category->id }}">
                            @endforeach
                        </div>
                        @break

                    @default

                @endswitch

                <button type="submit" class="btn btn-success mt-1 pe-3 ps-3" {{ $hidden }}> {{ $action }} </button>
                <a href="{{ route( $routeVariable . '.index') }}" class="btn btn-danger mt-1 pe-3 ps-3">Cancel</a>
            </form>
        </div>
    </div>
</div>
