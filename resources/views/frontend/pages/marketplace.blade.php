@extends('frontend.layouts.master')
@section('title','CANADA BLOG || HOME PAGE')
@section('main-content')


<section class="py-5">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">

        <div class="bootstrap-tabs product-tabs">
          <div class="tabs-header d-flex justify-content-between border-bottom my-5">
            <h3>Trending Products</h3>
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <!-- <a href="#" class="nav-link text-uppercase fs-6 active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all">All</a>
                <a href="#" class="nav-link text-uppercase fs-6" id="nav-fruits-tab" data-bs-toggle="tab" data-bs-target="#nav-fruits">Fruits & Veges</a>
                <a href="#" class="nav-link text-uppercase fs-6" id="nav-juices-tab" data-bs-toggle="tab" data-bs-target="#nav-juices">Juices</a> -->
              </div>
            </nav>
          </div>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
              <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                @foreach($product as $item)
                <div class="col mb-4">
                  <div class="product-item">
                    <a href="#" class="btn-wishlist">
                      <svg width="24" height="24">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </a>
                    <figure>
                      <a href="#" title="{{ $item->title }}">
                        <img src="{{ asset($item->photo) }}" alt="{{ $item->title }}" class="tab-image" width="230" height="200">
                      </a>


                    </figure>
                    <h3>{{ $item->title }}</h3>
                    <span class="qty">{{ $item->size ?? '1 Unit' }}</span>
                    <span class="rating">
                      <svg width="24" height="24" class="text-primary">
                        <use xlink:href="#star-solid"></use>
                      </svg>
                      {{ $item->rating ?? '4.5' }}
                    </span>
                    <span class="price">${{ number_format($item->price, 2) }}</span>

                    <div class="d-flex align-items-center justify-content-between">
                      <div class="input-group product-qty">
                        <span class="input-group-btn">
                          <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                            <svg width="16" height="16">
                              <use xlink:href="#minus"></use>
                            </svg>
                          </button>
                        </span>
                        <input type="text" name="quantity" class="form-control input-number" value="1">
                        <span class="input-group-btn">
                          <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                            <svg width="16" height="16">
                              <use xlink:href="#plus"></use>
                            </svg>
                          </button>
                        </span>
                      </div>
                      <a href="" class="nav-link">Add to Cart
                        <iconify-icon icon="uil:shopping-cart"></iconify-icon>
                      </a>

                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <!-- / product-grid -->

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>


@endsection