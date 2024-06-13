@extends('layouts.app')
@section('content')
    @php
        $value= "";
        $disabled= "";
        $required= "required";
        $hidden="";
        $actionCateg='Update category';
        $action='Update';
        $method = 'PUT';
        $routeVariable="update";
    @endphp
    @include('includes.formcateg')
@endsection
