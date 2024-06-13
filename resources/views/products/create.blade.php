@extends('layouts.app')
@section('content')
    @php
        $value= "";
        $disabled= "";
        $required= "required";
        $hidden="";
        $actionProd='Create product';
        $action='Create';
        $method = 'POST';
        $routeVariable="store";
    @endphp
    @include('includes.formprod')
@endsection
