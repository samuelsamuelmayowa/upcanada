@extends('frontend.layouts.master')
@section('title','CANADA BLOG || HOME PAGE')
@section('main-content')

<section id="latest-blog" class="py-5">
  <div class="container">

    <!-- HEADER -->
    <div class="row">
      <div class="col-12">
          <h2 class="section-title fw-bold text-center">Upcoming Events</h2>
        <div class="section-header d-flex flex-wrap align-items-center justify-content-between my-5">
        

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



      <section class="py-5 bg-light">
  <div class="container">

    <!-- Page Header -->
    <div class="text-center mb-5">
      <h1 class="fw-bold text-primary mb-2">Events</h1>
      <p class="text-muted mb-0">
        Community outreach, education support, and cultural development initiatives.
      </p>
    </div>

    <!-- Featured Event -->
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-5">
      <div class="row g-0 align-items-stretch">

        <!-- Image / Poster (optional) -->
        <div class="col-lg-5">
          <div class="h-100" style="background: url('https://via.placeholder.com/900x700') center/cover no-repeat; min-height: 280px;">
            <!-- If you have a real image, replace the placeholder URL -->
          </div>
        </div>

        <!-- Content -->
        <div class="col-lg-7">
          <div class="p-4 p-md-5 h-100 d-flex flex-column">
            <div class="d-flex flex-wrap gap-2 mb-3">
              <span class="badge text-bg-primary">Book Distribution</span>
              <span class="badge text-bg-secondary">Community Outreach</span>
              <span class="badge text-bg-success">Video</span>
            </div>

            <h2 class="fw-bold mb-2">
              Back to School: UPU Canada Branch Donates Books to Schools
            </h2>

            <p class="text-muted mb-4">
              UPU Canada Branch supports education by donating books to schools in
              Ughelli North, Ethiope East, and Ethiope West LGAs as part of its
              Back-to-School initiative.
            </p>

            <!-- Quick Info Row -->
            <div class="row g-3 mb-4">
              <div class="col-6 col-md-4">
                <div class="p-3 bg-light rounded border h-100">
                  <div class="small text-muted">Category</div>
                  <div class="fw-semibold">Book Distribution</div>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="p-3 bg-light rounded border h-100">
                  <div class="small text-muted">Location</div>
                  <div class="fw-semibold">Ughelli / Ethiope (LGAs)</div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="p-3 bg-light rounded border h-100">
                  <div class="small text-muted">Status</div>
                  <div class="fw-semibold text-primary">Published</div>
                </div>
              </div>
            </div>

            <!-- Buttons -->
            <div class="mt-auto d-flex flex-wrap gap-2">
              <a
                href="https://rerotv.com/news/back-to-school-upu-canada-branch-donates-books-to-schools-in-ughelli-north-ethiope-east-and-ethiope-west-lgas-video/"
                target="_blank"
                class="btn btn-primary btn-lg"
              >
                Watch Video / Read Article
              </a>

              <a href="#" class="btn btn-outline-secondary btn-lg">
                Back to All Events
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- More Events (Static Cards) -->
    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-md-6 col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
          <div id="bookEventCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner rounded-top-4">

    <div class="carousel-item active">
      <img src="img/schoolone.jpeg" class="d-block w-100" alt="Book Distribution 1">
    </div>

    <div class="carousel-item">
      <img src="img/schooltwo.jpeg" class="d-block w-100" alt="Book Distribution 2">
    </div>

    <div class="carousel-item">
      <img src="img/schoolthree.jpeg" class="d-block w-100" alt="Book Distribution 3">
    </div>

    <div class="carousel-item">
      <img src="img/schoolfour.jpeg" class="d-block w-100" alt="Book Distribution 4">
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#bookEventCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#bookEventCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

          <div class="card-body">
            <div class="d-flex gap-2 mb-2">
              <span class="badge text-bg-primary">Outreach</span>
              <span class="badge text-bg-secondary">Education</span>
            </div>
            <h5 class="fw-bold mb-2">Book Distribution Program</h5>
            <p class="text-muted mb-3">
              Supporting students and communities through educational materials and engagement.
            </p>
            <a
              href="https://rerotv.com/news/back-to-school-upu-canada-branch-donates-books-to-schools-in-ughelli-north-ethiope-east-and-ethiope-west-lgas-video/"
              target="_blank"
              class="fw-semibold text-primary text-decoration-none"
            >
              View Details →
            </a>
          </div>
        </div>
      </div>

    
    </div>

  </div>
</section>

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
