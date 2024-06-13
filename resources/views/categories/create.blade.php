@extends('layouts.app')
@section('content')
    @php
        $value= "";
        $disabled= "";
        $required= "required";
        $hidden="";
        $actionCateg='Create category';
        $action='Create';
        $method = 'POST';
        $routeVariable="store";
    @endphp
    @include('includes.formcateg')
@endsection
