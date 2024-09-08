@extends('layouts.app')
@section('title', 'productos')
@section('content')
    <x-crud.crud-table :$heads title="CRUD productos" routeVariable="products">
            @foreach($products as $product)
                <tr class="text-center">
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->brand->brand }}</td>
                    <td>@foreach ($product->categories as $category)
                        {{ $category->name }}
                    @endforeach</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <x-crud.crud-buttons :object="$product" routeVariable="products" />
                </tr>
            @endforeach
    </x-crud.crud-table>
@endsection
