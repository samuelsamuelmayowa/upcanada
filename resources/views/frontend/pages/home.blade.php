@extends('frontend.layouts.master')
@section('title','CANADA || HOME PAGE')
@section('main-content')

<!-- HERO / CAROUSEL -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/WhatsApp Image 2026-01-05 at 12.13.58 AM (1).jpeg" alt="UPU Canada">

                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <h1 class="display-4 text-white fw-bold mb-4">
                                    Urhobo Progress Union (UPU) Canada
                                </h1>

                                <p class="fs-5 text-light mb-4">
                                    A united national body connecting all Urhobo people across Canada,
                                    preserving our heritage, empowering our future, and fostering cultural
                                    pride in a multicultural society.
                                </p>

                                <a href="{{ route('events') }}" class="btn btn-primary btn-lg px-4 me-2">
                                    Events
                                </a>
                                <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-4">
                                    Become a Member
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<!-- 🔥 AUTO-DISMISS EVENT BANNER - 9 SECONDS -->
<div class="container-fluid" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);">
  <div class="container py-4">
    <div class="row">
      <div class="col-12">
        <!-- Auto-Collapse Button -->
        <button class="btn btn-light btn-lg fw-bold w-100 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#homeEventCollapse" aria-expanded="true" aria-controls="homeEventCollapse" style="color: #1a1a1a; font-size: 1.1rem; border: 2px solid #ffffff;">
          📢 NATIONAL CONVENTION 2026 - URHOBO PROGRESS UNION OF CANADA
          <span class="float-end">
            <span id="countdownTimer" style="color: #ff6b6b; font-weight: bold;">9s</span>
          </span>
        </button>

        <!-- Collapsible Content -->
        <div class="collapse show" id="homeEventCollapse">
          <div class="card border-0 rounded-0 overflow-hidden" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); border: 4px solid #ffffff; border-top: none;">
            <div class="row g-0 align-items-stretch">
              <!-- Large Featured Image -->
              <div class="col-lg-6">
                <img src="img/eventmain.jpeg" alt="Featured Event" class="w-100 h-100 object-fit-cover" style="min-height: 300px; object-fit: cover;">
              </div>

              <!-- Content Section -->
              <div class="col-lg-6">
                <div class="p-4 h-100 d-flex flex-column justify-content-center text-white position-relative">
                  <!-- Close Button (X) -->
                  <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-toggle="collapse" data-bs-target="#homeEventCollapse" aria-label="Close" style="width: 40px; height: 40px;"></button>

                  <!-- Eye-catching badge -->
                  <div class="mb-3">
                    <span class="badge bg-white text-dark fw-bold px-3 py-2" style="font-size: 14px;">🌟 NATIONAL CONVENTION 2026</span>
                  </div>

                  <h3 class="fw-bold mb-2 text-white" style="font-size: 1.8rem;">
                    URHOBO PROGRESS UNION OF CANADA
                  </h3>

                  <p class="mb-3 text-white" style="font-size: 0.95rem; font-style: italic;">
                    "A New Dawn of Unity, Culture & Emerging Voices"
                  </p>

                  <!-- Event Quick Details -->
                  <div class="row g-2 mb-3">
                    <div class="col-6">
                      <div class="bg-white bg-opacity-10 p-2 rounded-2 text-white border border-white border-opacity-25">
                        <div class="small opacity-85">📅 Dates</div>
                        <div class="fw-bold" style="font-size: 0.9rem;">Jul 31 - Aug 2</div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="bg-white bg-opacity-10 p-2 rounded-2 text-white border border-white border-opacity-25">
                        <div class="small opacity-85">🎤 O'Fresh Live</div>
                        <div class="fw-bold" style="font-size: 0.9rem;">+More</div>
                      </div>
                    </div>
                  </div>

                  <!-- Buttons -->
                  <div class="d-flex flex-wrap gap-2">
                    <a href="tel:+14374101670" class="btn btn-light fw-bold px-3 py-2" style="color: #1a1a1a; font-size: 0.9rem;">
                      📞 Call Now
                    </a>
                    <a href="mailto:info@upucanada.ca" class="btn btn-outline-light fw-bold px-3 py-2" style="font-size: 0.9rem;">
                      📧 Register
                    </a>
                  </div>

                  <p class="small text-white mt-2 mb-0" style="font-size: 0.8rem;">
                    📍 Delta by Marriott, Etobicoke<br>
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
</div>

<!-- KEY PILLARS -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="bg-white shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-globe fa-2x text-primary mb-3"></i>
                    <h5 class="fw-bold">Cultural Promotion</h5>
                    <p class="text-muted">
                        We promote Urhobo language, history, and traditions through education and cultural events.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-white shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-users fa-2x text-primary mb-3"></i>
                    <h5 class="fw-bold">Youth Empowerment</h5>
                    <p class="text-muted">
                        Supporting Urhobo youth and families through mentorship and development initiatives.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-white shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-calendar-alt fa-2x text-primary mb-3"></i>
                    <h5 class="fw-bold">Events & Outreach</h5>
                    <p class="text-muted">
                        Organizing festivals, community outreach, and national engagement programs.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT / HISTORY -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">History of UPU Canada</h2>
            <p class="text-muted fs-5">
                Strengthening unity and cultural identity across Canada
            </p>
        </div>

        <div class="card border-0 shadow-sm p-4">
            <p class="fs-5 text-muted">
                The Urhobo Progress Union (UPU) Canada was established as a unified national body
                representing Urhobo people across Canada. It serves as a platform for cultural
                preservation, leadership, advocacy, and community development.
            </p>

            <p class="fs-5 text-muted">
                The inauguration of the UPU Canada National Body and Executives marked a historic
                milestone, reinforcing Canada’s position within the global UPU structure.
            </p>

            <!-- VIDEO -->
            <div class="ratio ratio-16x9 mt-4 rounded overflow-hidden shadow-sm">
                <iframe
                    src="https://www.youtube.com/embed/"
                    title="UPU Canada National Body Inauguration"
                    allowfullscreen>
                </iframe>
            </div>

            <p class="text-muted mt-3 text-center">
                Canada: UPU President General <strong>Olorogun Ese Gam</strong> inaugurates
                the UPU Canada National Body.
            </p>
        </div>
    </div>
</section>

<!-- MISSION & VISION -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <h4 class="fw-bold text-primary">Our Mission</h4>
                    <p class="fs-5 text-muted">
                        To promote unity, preserve Urhobo culture, empower future generations,
                        and contribute positively to Canadian society.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <h4 class="fw-bold text-primary">Our Vision</h4>
                    <p class="fs-5 text-muted">
                        To build a strong, inclusive Urhobo national body that fosters leadership,
                        cultural pride, and sustainable development.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EVENTS -->
<section class="py-5">
    <div class="container">
        <div class="card border-0 shadow-sm p-4 text-center">
            <h3 class="fw-bold text-primary mb-4">Events</h3>

            <div class="row g-3">
                <div class="col-md-6">
                    <a href="#" class="btn btn-primary btn-lg w-100">Past Events</a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn btn-outline-primary btn-lg w-100">Upcoming Events</a>
                </div>
            </div>

            <p class="text-muted mt-3">
                Upcoming conventions will include secure payments via
                <strong>Stripe</strong> and <strong>Eventbrite</strong>.
            </p>
        </div>
    </div>
</section>

<!-- MEETING DAYS -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="card border-0 shadow-sm p-4 text-center">
            <h3 class="fw-bold text-primary">Meeting Days</h3>
            <p class="fs-5 text-muted">
                <strong>3rd Sunday of Every Month</strong><br>
                <small>(Except Picnic, Convention, Summit, and End of Year Events)</small>
            </p>
        </div>
    </div>
</section>

<!-- ADVERT -->
<section class="py-5">
    <div class="container">
        <div class="card border-0 shadow-sm p-4 text-center">
            <h3 class="fw-bold text-primary mb-3">Advert Placement</h3>
            <p class="fs-5 text-muted mb-1">
                Phone: <strong>+1 437 979 3996</strong>
            </p>
            <p class="fs-5 text-muted">
                Email: <strong>Urhoboprogressunionofcanada@gmail.com</strong>
            </p>
        </div>
    </div>
</section>

<!-- AUTO-DISMISS SCRIPT -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const eventCollapse = document.getElementById('homeEventCollapse');
    const countdownTimer = document.getElementById('countdownTimer');
    let seconds = 9;

    // Update countdown timer
    const countdownInterval = setInterval(function() {
      seconds--;
      countdownTimer.textContent = seconds + 's';

      // When timer reaches 0, collapse the banner
      if (seconds <= 0) {
        clearInterval(countdownInterval);
        const bsCollapse = new bootstrap.Collapse(eventCollapse, {
          toggle: true
        });
      }
    }, 1000);
  });
</script>

@endsection
