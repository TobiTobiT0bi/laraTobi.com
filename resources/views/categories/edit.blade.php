@extends('layouts.app')
@section('content')
    @include('includes.form', ['value' => "",
                                'disabled' => "",
                                'required' => "required",
                                'hidden' => "",
                                'objects' => $categories,
                                'object' => $category,
                                'actionType'=>'Update category',
                                'action' => 'Update',
                                'method' => 'PUT',
                                'routeVariable' =>"categories",
                                'routeAction' =>"update",
                                'name' => 'name',
                                'description' => ''])
@endsection
