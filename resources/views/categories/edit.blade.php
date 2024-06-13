@extends('layouts.app')
@section('content')
    @php
        $value = "";
        $disabled = "";
        $required = "required";
        $hidden ="";
        $objects = $categories;
        $object = $category;
        $actionType='Update category';
        $action ='Update';
        $method = 'PUT';
        $routeVariable ="categories";
        $routeAction ="update";
        $name = 'name';
        $description = '';
    @endphp
    @include('includes.form')
@endsection
