@extends('layouts.app')
@section('content')
    @php
        $value= "";
        $disabled= "";
        $required= "required";
        $hidden="";
        $actionProd='Update product';
        $action = 'Update';
        $method = 'PUT';
        $routeVariable="update";
    @endphp
    @include('includes.formprod')
@endsection