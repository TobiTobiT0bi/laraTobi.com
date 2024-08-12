@extends('layouts.app')
@section('content')
    {{-- @include('includes.form', ['value' => "",
                                'disabled' => "",
                                'required' => "required",
                                'hidden' =>"",
                                'objects' => $brands,
                                'object' => $brand,
                                'actionType'=>'Update brand',
                                'action' =>'Update',
                                'method' => 'PUT',
                                'routeVariable' =>"brands",
                                'routeAction' =>"update",
                                'name' => 'brand',
                                'description' => '']) --}}

    <x-form.form method="PUT" type="Update brand" action="Update" routeVariable="brands" routeAction="update" name="brand" :object="$brand" />
@endsection
