@extends('layouts.app')
@section('content')
    @php
        $routeVariable= "brands";
        $conditionalTitle= "";
        $secondAttr = "";
        $price = "";
        $objects = $brands;
        $name = "brand";

    @endphp
    @include('includes.crud')
