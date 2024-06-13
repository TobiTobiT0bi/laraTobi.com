@extends('layouts.app')
@section('content')
    @php
        $value= "";
        $disabled= "";
        $required= "required";
        $hidden="";
        $actionBrand='Create brand';
        $action='Create';
        $method = 'POST';
        $routeVariable="store";
    @endphp
    @include('includes.formbrand')
@endsection
