@extends('layouts.app')
@section('content')
    @php
        $value = "";
        $disabled = "";
        $required = "required";
        $hidden ="";
        $objects = $brands;
        $actionType='Create brand';
        $action ='Create';
        $method = 'POST';
        $routeVariable ="brands";
        $routeAction ="store";
        $name = 'brand';
        $description = '';
    @endphp
    @include('includes.form')
@endsection
