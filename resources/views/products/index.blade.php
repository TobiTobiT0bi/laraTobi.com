@extends('layouts.app')
@section('title', 'productos')
@section('content')
    @include('includes.crud', ['routeVariable' => "products",
                                'conditionalTitle' => "BRAND",
                                'secondAttr'  => "description",
                                'price'  => "price",
                                'objects'  => $products,
                                'name'  => "title"])
@endsection
