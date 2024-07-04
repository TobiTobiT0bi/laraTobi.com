@extends('layouts.app')
@section('content')
    @include('includes.form', ['value' => '',
                                'disabled' => '',
                                'required' => 'required',
                                'hidden' => '',
                                'objects' => $brands,
                                'actionType' => 'Create brand',
                                'action' => 'Create',
                                'method' => 'POST',
                                'routeVariable' => 'brands',
                                'routeAction' => 'store',
                                'name' => 'brand',
                                'description' => ''])
@endsection
