@extends('admin.layouts.master')

@section('main-content')


<div class="card mt-4">
    <div class="card-header">
        <h4>Product Details</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $product->id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ $product->title }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ $product->categories }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>₦{{ $product->price }}</td>
            </tr>
            <tr>
                <th>Condition</th>
                <td>{{ $product->condition }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    @if($product->status == 'active')
                        <span class="badge badge-success">{{ $product->status }}</span>
                    @else
                        <span class="badge badge-warning">{{ $product->status }}</span>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Photos</th>
               <td>
        @if($product->images && $product->images->count())
            @foreach($product->images as $image)
                <img src="{{ asset($image->image_path) }}" class="img-thumbnail mr-2" style="max-width: 120px;" alt="Product Image">
            @endforeach
        @else
            <img src="{{ asset('backend/img/thumbnail-default.jpg') }}" class="img-thumbnail" style="max-width: 120px;" alt="Default Photo">
        @endif
    </td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{!! $product->summary !!}</td>
            </tr>
        </table>
        <a href="{{ route('admin.product.index') }}" class="btn btn-secondary">Back to Products</a>
    </div>
</div>



@endsection