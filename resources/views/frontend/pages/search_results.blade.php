@extends('frontend.layouts.master')

@section('content')
  <h2 class="text-center mb-4">Search Results for: "{{ $query }}"</h2>

  @if($products->count())
    <h3>Products</h3>
    <div class="row">
      @foreach($products as $product)
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="{{ asset('uploads/images/' . $product->photo) }}" class="card-img-top" alt="{{ $product->title }}">
            <div class="card-body">
              <h5 class="card-title">{{ $product->title }}</h5>
              <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 100) }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endif

  @if($events->count())
    <h3>Events</h3>
    <div class="row">
      @foreach($events as $event)
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="{{ asset('uploads/images/' . $event->photo) }}" class="card-img-top" alt="{{ $event->title }}">
            <div class="card-body">
              <h5 class="card-title">{{ $event->title }}</h5>
              <p class="card-text">{{ \Illuminate\Support\Str::limit($event->description, 100) }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endif

  @if(!$products->count() && !$events->count())
    <p>No results found.</p>
  @endif
@endsection
