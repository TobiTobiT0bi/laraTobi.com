@extends('layouts.app')
@section('title', 'brands')
@section('content')
    <x-crud.crud-table :$heads title="CRUD marcas" routeVariable="brands">
            @foreach($brands as $brand)
                <tr class="text-center">
                    <td>{{ $brand->id }}</td>
                    <td>{{ $brand->brand }}</td>
                    <x-crud.crud-buttons :object="$brand" routeVariable="brands" />
                </tr>
            @endforeach
    </x-crud.crud-table>
@endsection
