@extends('layouts.app')
@section('content')
    @include('includes.crud', [ 'routeVariable'=> "categories",
                                'conditionalTitle'=> "parent_id",
                                'secondAttr' => "parent_id",
                                'price' => "",
                                'objects' => $categories,
                                'name' => "name"])
@endsection
