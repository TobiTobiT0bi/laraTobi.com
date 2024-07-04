@extends('layouts.app')
@section('title', 'categorias')
@section('content')
    <x-crud.crud-table :$heads title="CRUD categorias" routeVariable="categories">
            @foreach($categories as $category)
                <tr class="text-center">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->parent_id }}</td>
                    <td>{{ $category->name }}</td>
                    <x-crud.crud-buttons :$object="$category" routeVariable="categories"\>
                </tr>
            @endforeach
    </x-crud.crud-table>
@endsection
