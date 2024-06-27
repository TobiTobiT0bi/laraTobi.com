@extends('layouts.app')
@section('title', 'productos')
@section('content')
    @php
        $routeVariable= "products";
        $conditionalTitle= "BRAND";
        $secondAttr = "description";
        $price = "price";
        $objects = $products;
        $name = "title";

    @endphp
    @include('includes.crud')
@endsection
