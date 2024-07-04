@extends('layouts.app')
@section('content')
    @include('includes.form', ['value' => "",
                                'disabled' => "",
                                'required' => "required",
                                'hidden' =>"",
                                'objects' => $brands,
                                'object' => $product,
                                'actionType' =>'Update product',
                                'action' =>'Update',
                                'method' => 'PUT',
                                'routeVariable' =>"products",
                                'routeAction' =>"update",
                                'name' => 'title',
                                'description' => 'description',
                                'price' => "price"])
@endsection
