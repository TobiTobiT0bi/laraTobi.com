@extends('layouts.app')
@section('content')
    @include('includes.form', ['value' => '',
                                'disabled' => '',
                                'required' => 'required',
                                'hidden' => '',
                                'objects' => $categories,
                                'actionType' => 'Create category',
                                'action' => 'Create',
                                'method' => 'POST',
                                'routeVariable' => 'categories',
                                'routeAction' => 'store',
                                'name' => 'name',
                                'description' => ''])
@endsection
