@extends('layouts.app')
@section('content')
    {{-- @include('includes.form', ['value' => '',
                                'disabled' => '',
                                'required' => 'required',
                                'hidden' => '',
                                'objects' => $categories,
                                'actionType' => 'Create category',
                                'action' => 'Create',
                                'method' => 'POST',
                                'routeVariable' => 'categories',
                                'routeAction' => 'store',
                                'name' => 'name',
                                'description' => '']) --}}

    <x-form.form method="POST" type="Create category" action="create" routeVariable="categories" routeAction="store" name="name">
        <div class="mb-5">
            <label for="parent_id" class="form-label">Parent</label>
            <select name="parent_id" id="parent_id" class="form-select">
                @foreach ($categories as $parent_category)
                    <option value="{{ $parent_category->id }}" {{ old('category_id', $object->parent_id ?? '') == $parent_category->id ? 'selected' : '' }}>{{ $parent_category->name }}</option>
                @endforeach
            </select>
        </div>
    </x-form.form>
@endsection
