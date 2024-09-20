@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Create New Product</h1>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{route('products.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    @error('title')
                    {{$message}}
                    @enderror
                    <br>
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter product title" required>
                </div>
                <div class="mb-3">
                    @error('description')
                    {{$message}}
                    @enderror
                    <br>
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Enter product description"
                        required></textarea>
                </div>
                <div class="mb-3">
                    @error('price')
                    {{$message}}
                    @enderror
                    <br>
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Enter product price" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
                <a href="{{route('products.index')}}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection