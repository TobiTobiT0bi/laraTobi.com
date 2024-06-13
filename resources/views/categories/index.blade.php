@extends('layouts.app')
@section('content')
    @php
        $routeVariable= "categories";
        $conditionalTitle= "parent_id";
        $secondAttr = "parent_id";
        $price = "";
        $objects = $categories;
        $name = "name";

    @endphp
    @include('includes.crud')
