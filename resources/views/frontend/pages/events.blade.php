@extends('frontend.layouts.master')
@section('title','CANADA BLOG || HOME PAGE')
@section('main-content')







<div>
    <section id="latest-blog" class="py-5">
  <div class="container-fluid">
    <div class="row">
      <div class="section-header d-flex align-items-center justify-content-between my-5">
        <h2 class="section-title">Upcoming Events</h2>
        <div class="btn-wrap align-right">
          <a href="" class="d-flex align-items-center nav-link">
            Read All Articles
            <svg width="24" height="24">
              <use xlink:href="#arrow-right"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="row">
      @foreach ($events as $event)
      <div class="col-md-4">
        <article class="post-item card border-0 shadow-sm p-3">
          <div class="image-holder zoom-effect">
            <a href="{{ route("subevent",$event->id) }}">

              <img src="{{ asset( $event->photo) }}" alt="{{ $event->name }}" class="card-img-top">
            </a>
          </div>
          <div class="card-body">
            <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
              <div class="meta-date">
                <svg width="16" height="16">
                  <use xlink:href="#calendar"></use>
                </svg>
                {{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}
              </div>
              <div class="meta-categories">
                <svg width="16" height="16" class="post-title">
                  <use xlink:href="#category"></use>
                </svg>
                {{ $event->name ?? 'Uncategorized' }}
              </div>
            </div>
            <div class="post-header">
              <h3 class="post-title">
                <a href="" class="text-decoration-none">
                  {{ Str::limit($event->title, 50) }}
                </a>
              </h3>
              <p>{{ Str::limit(strip_tags($event->eventinfo), 53) }}</p>
            </div>
          </div>
        </article>
      </div>
      @endforeach
    </div>



  </div>
</section>
</div>


@endsection