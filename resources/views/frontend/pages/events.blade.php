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

    <!-- 🔥 NEW FEATURED EVENT - DROPDOWN/COLLAPSIBLE -->
    <div class="row mb-5">
      <div class="col-12">
        <!-- Dropdown Toggle Button -->
        <div class="mb-3">
          <button class="btn btn-dark btn-lg fw-bold w-100 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#eventCollapse" aria-expanded="false" aria-controls="eventCollapse" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); border: 2px solid #ffffff; font-size: 1.2rem;">
            📢 NATIONAL CONVENTION 2026 - URHOBO PROGRESS UNION OF CANADA
            <span class="float-end">
              <svg width="24" height="24" class="collapse-arrow">
                <use xlink:href="#arrow-right"></use>
              </svg>
            </span>
          </button>
        </div>

        <!-- Collapsible Content -->
        <div class="collapse" id="eventCollapse">
          <div class="card border-0 shadow-xl rounded-4 overflow-hidden" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); border: 4px solid #ffffff;">
            <div class="row g-0 align-items-stretch">
              <!-- Large Featured Image -->
              <div class="col-lg-6">
                <img src="img/newimage.jpeg" alt="Featured Event" class="w-100 h-100 object-fit-cover" style="min-height: 400px; object-fit: cover;">
              </div>

              <!-- Content Section -->
              <div class="col-lg-6">
                <div class="p-5 h-100 d-flex flex-column justify-content-center text-white position-relative">
                  <!-- Close Button (X) -->
                  <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-toggle="collapse" data-bs-target="#eventCollapse" aria-label="Close" style="width: 50px; height: 50px;"></button>

                  <!-- Eye-catching badge -->
                  <div class="mb-3">
                    <span class="badge bg-white text-dark fs-6 fw-bold px-3 py-2" style="font-size: 18px !important;">🌟 NATIONAL CONVENTION 2026</span>
                  </div>

                  <h2 class="fw-bold mb-2 text-white" style="font-size: 2.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                    URHOBO PROGRESS UNION OF CANADA
                  </h2>

                  <p class="mb-4 text-white" style="font-size: 1.2rem; font-style: italic; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">
                    "A New Dawn of Unity, Culture & Emerging Voices"
                  </p>

                  <!-- Event Details Grid -->
                  <!-- <div class="row g-3 mb-4">
                    <div class="col-6">
                      <div class="bg-white bg-opacity-10 p-3 rounded-3 text-white border border-white border-opacity-25">
                        <div class="small opacity-85">📅 Date</div>
                        <div class="fw-bold fs-6">Jul 31 - Aug 2, 2026</div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="bg-white bg-opacity-10 p-3 rounded-3 text-white border border-white border-opacity-25">
                        <div class="small opacity-85">🎤 Features</div>
                        <div class="fw-bold fs-6">O'Fresh Live</div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="bg-white bg-opacity-10 p-3 rounded-3 text-white border border-white border-opacity-25">
                        <div class="small opacity-85">📍 Venue</div>
                        <div class="fw-bold fs-6">Delta by Marriott</div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="bg-white bg-opacity-10 p-3 rounded-3 text-white border border-white border-opacity-25">
                        <div class="small opacity-85">⭐ Guest of Honor</div>
                        <div class="fw-bold fs-6">Olorogun Barr. Ese Gam Owe</div>
                      </div>
                    </div>
                  </div> -->

                  <!-- Highlights -->
                  <div class="mb-4">
                    <p class="mb-2 text-white" style="font-size: 0.95rem;">
                      <strong>✨ Featuring:</strong><br>
                      Famous Bobson (Artist) • Cultural Displays • Lectures • Guest Appearances & More
                    </p>
                  </div>

                  <!-- Buttons -->
                  <div class="d-flex flex-wrap gap-3">
                    <a href="tel:+14374101670" class="btn btn-light btn-lg fw-bold px-4" style="color: #1a1a1a;">
                      📞 +1 437 410 1670
                    </a>
                    <a href="mailto:info@upucanada.ca" class="btn btn-outline-light btn-lg fw-bold px-4">
                      📧 Register Now
                    </a>
                  </div>

                  <!-- Contact Info -->
                  <div class="mt-4 pt-3 border-top border-white border-opacity-25">
                    <p class="small mb-2 text-white" style="font-size: 0.85rem;">
                      📍 <strong>Delta by Marriott</strong><br>
                      655 Dixon Rd, Etobicoke, ON M9W 1J3, Canada
                    </p>
                    <p class="small text-white" style="font-size: 0.85rem;">
                      <strong>Contact:</strong><br>
                      📞 +1 647 779 5506 | +1 437 979 3996<br>
                      📧 urhoboprogressunionofcanada@gmail.com<br>
                      🌐 www.upucanada.ca
                    </p>
                  </div>
                </div>
              </div>
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
