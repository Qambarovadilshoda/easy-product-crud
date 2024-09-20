@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="text-center">Product CRUD</h1>
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('products.create')}}" class="btn btn-primary mb-3">Add New Product</a>

            <table class="table table-bordered table-hover">

                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach ($products as $product)
                <tbody>
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <a href="{{route('products.show', $product->id)}}" class="btn btn-secondary btn-sm">Show</a><br>
                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{route('products.destroy', $product->id)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>

                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection