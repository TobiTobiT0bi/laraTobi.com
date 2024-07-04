@extends('layouts.app')
@section('content')
    @include('includes.form', ['value' => '',
                                'disabled' => '',
                                'required' => 'required',
                                'hidden' => '',
                                'objects' => $brands,
                                'actionType' => 'Create Product',
                                'action' => 'create',
                                'method' => 'POST',
                                'routeVariable' => 'products',
                                'routeAction' => 'store',
                                'name' => 'title',
                                'description' => 'description',
                                'price' => 'price'])
@endsection
