@extends('layouts.app')
@section('content')
    @include('includes.crud', [ 'routeVariable'=> "brands",
                                'conditionalTitle'=> "",
                                'secondAttr' => "",
                                'price' => "",
                                'objects' => $brands,
                                'name' => "brand"])
@endsection
