@extends('frontend.layouts.master')
@section('title','CANADA BLOG || HOME PAGE')
@section('main-content')

<section id="latest-blog" class="py-5">
  <div class="container-fluid">

    <!-- HEADER -->
    <div class="row">
      <div class="col-12">
        <div class="section-header d-flex flex-wrap align-items-center justify-content-between my-5">
          <h2 class="section-title fw-bold">Upcoming Events</h2>

          <div class="btn-wrap align-right">
            <a href="" class="d-flex align-items-center nav-link fw-semibold">
              Read All Articles
              <svg width="24" height="24" class="ms-1">
                <use xlink:href="#arrow-right"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 🔹 STATIC EVENT INFO BAR -->
    <div class="row mb-5">
      <div class="col-md-3 col-6 mb-3">
        <div class="event-info text-center p-3 rounded shadow-sm h-100">
          <div class="fs-4">📅</div>
          <div class="text-muted small">Event Schedule</div>
          <div class="fw-semibold">Pending</div>
        </div>
      </div>

      <div class="col-md-3 col-6 mb-3">
        <div class="event-info text-center p-3 rounded shadow-sm h-100">
          <div class="fs-4">⏰</div>
          <div class="text-muted small">Event Time</div>
          <div class="fw-semibold">To Be Announced</div>
        </div>
      </div>

      <div class="col-md-3 col-6 mb-3">
        <div class="event-info text-center p-3 rounded shadow-sm h-100">
          <div class="fs-4">📍</div>
          <div class="text-muted small">Location</div>
          <div class="fw-semibold">Canada</div>
        </div>
      </div>

      <div class="col-md-3 col-6 mb-3">
        <div class="event-info text-center p-3 rounded shadow-sm h-100">
          <div class="fs-4">⬆</div>
          <div class="text-muted small">Upload Status</div>
          <div class="fw-semibold text-primary">Starting Soon</div>
        </div>
      </div>
    </div>

    <!-- EVENTS -->
    <div class="row">
      @foreach ($events as $event)
      <div class="col-md-4 mb-4">
        <article class="post-item card border-0 shadow-sm p-3 h-100">
          <div class="image-holder zoom-effect">
            <a href="{{ route("subevent",$event->id) }}">
              <img src="{{ asset($event->photo) }}" alt="{{ $event->name }}" class="card-img-top rounded">
            </a>
          </div>

          <div class="card-body">
            <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center small text-muted">
              <div>
                <svg width="14" height="14">
                  <use xlink:href="#calendar"></use>
                </svg>
                {{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}
              </div>

              <div>
                <svg width="14" height="14">
                  <use xlink:href="#category"></use>
                </svg>
                {{ $event->name ?? 'Uncategorized' }}
              </div>
            </div>

            <h3 class="post-title fs-5 fw-bold">
              <a href="{{ route("subevent",$event->id) }}" class="text-decoration-none text-dark">
                {{ Str::limit($event->title, 50) }}
              </a>
            </h3>

            <p class="text-muted">
              {{ Str::limit(strip_tags($event->eventinfo), 53) }}
            </p>
          </div>
        </article>
      </div>
      @endforeach
    </div>

  </div>
</section>

{{-- OPTIONAL STYLE --}}
<style>
  .event-info {
    background: #f8f9fa;
    border-bottom: 3px solid #0d6efd;
    transition: transform .2s ease;
  }
  .event-info:hover {
    transform: translateY(-4px);
  }
</style>

@endsection
