@extends('layouts.app')
@section('content')
{{--     @include('includes.form', ['value' => '',
                                'disabled' => '',
                                'required' => 'required',
                                'hidden' => '',
                                'objects' => $brands,
                                'actionType' => 'Create Product',
                                'action' => 'create',
                                'method' => 'POST',
                                'routeVariable' => 'products',
                                'routeAction' => 'store',
                                'name' => 'title',
                                'description' => 'description',
                                'price' => 'price']) --}}

<x-form.form method="POST" type="Create Product" action="create", routeVariable="products", routeAction="store" name="title">

    <div class="mb-5">
        <label for="description" class="form-label">description</label>
        <input type="text" name="description" value="{{ old('description', $product?->$description ?? '') }}" id="description" class="form-control bg-transparent text-white" >
    </div>

    <div class="mb-5">
        <label for="price" class="form-label">price</label>
        <input type="text" name="price" value="{{ old('price', $product?->$price ?? '') }}" id="price" class="form-control bg-transparent text-white">
    </div>

    <div class="mb-5">
        <label for="brand_id" class="form-label">Brand</label>
        <select name="brand_id" id="brand_id" class="form-select">
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}" {{ old('brand_id', $product?->brand_id ?? '') == $brand->id ? 'selected' : '' }}>{{ $brand->brand }}</option>
            @endforeach
        </select>
        @foreach ($categories as $category)
            {{ $category->name }} <input type="checkbox" name="categories_id[]" value="{{ $category->id }}">
        @endforeach
    </div>

</x-form.form>
@endsection
