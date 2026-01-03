@extends('admin.layouts.master')
@section('main-content')

<div class="card mt-4">
    <div class="card-header">
        <h4>Edit Product</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Title -->
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="{{ $product->title }}" class="form-control" required>
            </div>

            <!-- Description -->
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>

            <!-- Price -->
            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>
            </div>

            <!-- Condition -->
            <div class="form-group">
                <label>Condition</label>
                <select name="condition" class="form-control">
                    <option value="new" {{ $product->condition == 'new' ? 'selected' : '' }}>New</option>
                    <option value="hot" {{ $product->condition == 'hot' ? 'selected' : '' }}>Hot</option>
                </select>
            </div>

            <!-- Status -->
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <!-- Existing Photos -->
            <div class="form-group">
                <label>Existing Images</label><br>
                @foreach($product->images as $image)
                    <div class="d-inline-block mb-2">
                        <img src="{{ asset($image->image_path) }}" style="width: 100px; height: auto;" class="img-thumbnail">
                        <input type="checkbox" name="delete_images[]" value="{{ $image->id }}"> Delete
                    </div>
                @endforeach
            </div>

            <!-- Upload New Photos -->
            <div class="form-group">
                <label>Upload New Images</label>
                <input type="file" name="photo[]" class="form-control" multiple>
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</div>

@endsection
