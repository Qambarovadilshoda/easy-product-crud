@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Create New Product</h1>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{route('products.update', $product->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    @error('title')
                    {{$message}}
                    @enderror
                    <br>
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$product->title}}" required>
                </div>
                <div class="mb-3">
                    @error('description')
                    {{$message}}
                    @enderror
                    <br>
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3" required>{{$product->description}}</textarea>
                </div>
                <div class="mb-3">
                    @error('price')
                    {{$message}}
                    @enderror 
                    <br>
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" value="{{$product->price}}" required>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="{{route('products.index')}}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection