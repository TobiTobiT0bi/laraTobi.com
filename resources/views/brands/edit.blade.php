@extends('layouts.app')
@section('content')
    @php
        $value = "";
        $disabled = "";
        $required = "required";
        $hidden ="";
        $objects = $brands;
        $object = $brand;
        $actionType='Update brand';
        $action ='Update';
        $method = 'PUT';
        $routeVariable ="brands";
        $routeAction ="update";
        $name = 'brand';
        $description = '';
    @endphp
    @include('includes.form')
@endsection
