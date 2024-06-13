@extends('layouts.app')
@section('content')
    @php
        $value = "";
        $disabled = "";
        $required = "required";
        $hidden ="";
        $objects = $categories;
        $actionType='Create category';
        $action ='Create';
        $method = 'POST';
        $routeVariable ="categories";
        $routeAction ="store";
        $name = 'name';
        $description = '';
    @endphp
    @include('includes.form')
@endsection
