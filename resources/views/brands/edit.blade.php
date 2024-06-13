@extends('layouts.app')
@section('content')
    @php
        $value= "";
        $disabled= "";
        $required= "required";
        $hidden="";
        $actionBrand='Update brand';
        $action='Update';
        $method = 'PUT';
        $routeVariable="update";
    @endphp
    @include('includes.formbrand')
@endsection
