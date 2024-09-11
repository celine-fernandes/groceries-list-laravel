@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description">{{ $product->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category_id" class="form-control" id="category" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

