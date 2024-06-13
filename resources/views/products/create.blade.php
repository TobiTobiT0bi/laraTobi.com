@extends('layouts.app')
@section('content')
    @php
        $value = "";
        $disabled = "";
        $required = "required";
        $hidden ="";
        $objects = $brands;
        $actionType='Create product';
        $action ='Create';
        $method = 'POST';
        $routeVariable ="products";
        $routeAction ="store";
        $name = 'title';
        $description = 'description';
        $price = 'price'
    @endphp
    @include('includes.form')
@endsection
