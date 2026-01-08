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

@endsection
