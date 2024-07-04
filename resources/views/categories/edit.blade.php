@extends('layouts.app')
@section('content')
    @include('includes.form', ['value' => "",
                                'disabled' => "",
                                'required' => "required",
                                'hidden' => "",
                                'objects' => $categories,
                                'object' => $category,
                                'actionType'=>'Update category',
                                'action' => 'Update',
                                'method' => 'PUT',
                                'routeVariable' =>"categories",
                                'routeAction' =>"update",
                                'name' => 'name',
                                'description' => ''])

    <x-form.form type="Create category" action="create", routeVariable="cateogries", routeAction="store" name="name">
        <div class="mb-5">
            <label for="parent_id" class="form-label">Parent</label>
            <select name="parent_id" id="parent_id" class="form-select">
                @foreach ($objects as $parent_category)
                    <option value="{{ $parent_category->id }}" {{ old('category_id', $object->parent_id ?? '') == $parent_category->id ? 'selected' : '' }}>{{ $parent_category->name }}</option>
                @endforeach
            </select>
        </div>
    </x-form.form>
@endsection
