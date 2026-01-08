@extends('frontend.layouts.master')
@section('title','CANADA  || HOME PAGE')
@section('main-content')
<!-- <H1></H1>MY NAME IS SAMUEL JAMES THIS IS MAYOWA BROTHER </H1> -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img class="w-100"  src="img/WhatsApp Image 2026-01-05 at 12.13.58 AM (1).jpeg" alt="Image">


                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Urhobo Progress Union (UPU) Canada</h1>
                               <p class="text-2xl md:text-4xl  max-w-4xl mx-auto leading-relaxed text-center font-semibold">
                                A united national body connecting all Urhobo people across Canada, preserving our heritage, empowering our future, and fostering cultural pride in a multicultural society.
    <!-- A united national body connecting all Urhobo people across Canada — preserving our heritage, empowering our future, and fostering cultural pride in a multicultural society. -->
</p>

                                    <a href="{{ route('events') }}"  class="btn btn-primary py-sm-3 px-sm-5">Events</a>
                                    <a href="{{ route('login') }}"  class="btn btn-light py-sm-3 px-sm-5 ms-3">Become a Member</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Safe Driving Is Our Top Priority</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <br/> <br/>
    <br/>
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-car text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Cultural Promotion</h5>
                                <span>  
                We promote Urhobo language, history, and traditions through events and education
            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Youth Empowerment</h5>
                                <span>We support Urhobo youth and families through mentorship and development programs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-file-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Events & Outreach</h5>
                                <span>We organize cultural festivals, outreach programs, and community building events.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->




<section class="py-5 bg-light">
  <div class="container">

    <!-- PAGE HEADER -->
    <div class="text-center mb-5">
      <h1 class="fw-bold text-uppercase text-primary">Urhobo Progress Union (UPU) Canada</h1>
      <p class="text-muted fs-5">
        A united national body connecting all Urhobo people across Canada, preserving our heritage,
        empowering our future, and fostering cultural pride in a multicultural society.
      </p>
    </div>

    <!-- HISTORY -->
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="card border-0 shadow-sm p-4">
          <h3 class="fw-bold text-primary mb-3">History of UPU Canada</h3>
          <p class="fs-5 text-muted">
            The Urhobo Progress Union (UPU) Canada was established to serve as a unified national body
            representing all Urhobo people living across Canada. The formation of UPU Canada reflects
            the collective desire to preserve Urhobo culture, promote unity, and provide a structured
            platform for advocacy, development, and cultural engagement.
          </p>

          <p class="fs-5 text-muted">
            The official inauguration of the UPU Canada National Body and Executives marked a historic
            milestone, reinforcing Canada’s place within the global UPU structure and strengthening
            connections with Urhobo communities worldwide.
          </p>
          <div class="ratio ratio-16x9 mt-4 rounded overflow-hidden shadow-sm">
  <iframe 
    src="https://www.youtube.com/embed/"
    title="UPU Canada National Body Inauguration"
    allowfullscreen>
  </iframe>
</div>

<p class="text-muted mt-3 text-center">
  Canada: UPU President General, <strong>Olorogun Ese Gam</strong>, inaugurates
  the UPU National Body in Canada.
</p>

        </div>
      </div>
    </div>

    <!-- MISSION & VISION -->
    <div class="row mb-5">
      <div class="col-md-6 mb-4">
        <div class="card border-0 shadow-sm p-4 h-100">
          <h3 class="fw-bold text-primary mb-3">Our Mission</h3>
          <p class="fs-5 text-muted">
            To promote unity among Urhobo people in Canada, preserve and promote Urhobo culture and
            traditions, empower future generations, and actively contribute to the social and cultural
            development of our host communities.
          </p>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <div class="card border-0 shadow-sm p-4 h-100">
          <h3 class="fw-bold text-primary mb-3">Our Vision</h3>
          <p class="fs-5 text-muted">
            To build a strong, inclusive, and united Urhobo national body in Canada that serves as a
            beacon of cultural pride, leadership, and sustainable development within a multicultural
            society.
          </p>

          
        </div>
      </div>
    </div>

    <!-- INAUGURATION -->
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="card border-0 shadow-sm p-4">
          <h3 class="fw-bold text-primary mb-3">UPU Canada National Body Inauguration</h3>

          <p class="fs-5 text-muted">
            The UPU Canada National Body was officially inaugurated by the UPU President General,
            <strong>Olorogun Ese Gam</strong>, marking a historic moment for Urhobo people in Canada.

            <p>
                11. 2017 convention in Toronto                                                                                                                                          2018 Picnic                                                                                                                                                                    2022 Gala Nite                                                                                                                                                                  2022 support for Displaced Urhobos at IDP Camp in Jeremy                                                                               2023 Sub branch Joint Picnic                                                                                                                                        2024 Convention                                                                                                                                                       2024 October - Election of the National Body Executives                                                                2024 Immigration Law and Canada Law lecture by Barr. Matthew Tubie                                      2025 End Of Year Event                                                                                                                                                                                                                                                                                                                               2025 Feb- Love Feast                                                                                                                                                2025 Mar- International Women's Day Virtual Summit with Ln. Dcns (Mrs) Evelyn Imokhe, PMJF, NLCF, and Councill of                                                                                                                2025 April- Natural Disaster Relief support Items to The Vulnerable at Ughoton when they had a heavy wind that blew of roofs and homes, rendering people homeless.                                                                                                                                                                                                 2025 April- Edi (Banga/ Palm) Day                                                                                                     2025 April- The Inauguration of UPU Canada National body/ Excos, a formal event that defines Canada's Sovereignty.                                                                                                                          2025 May- Project of Books Donations to Effurun-Otor Primary School                                                                2025 May- Project of Books Donations to Effurun-Otor  Primary School                                           2025 July- National Family Picnic                                                                                                                            2025 September - Mental Health Lecture by Ms. Nnando                                                                        2025 November - International Men's Day Lecture delivered virtually by Dr Edomi, Phd.                                                     2025 December - Participation in UPU Worldwide Convention  at Uvwiamuge                                         2025 December - National End of Year party/ FundRaising.
            </p>
          </p>

          <a href="https://rerotv.com/news/canada-upu-president-general-olorogun-ese-gam-inaugurates-upu-national-body-in-canada-video/"
             target="_blank"
             class="btn btn-outline-primary mt-2">
            Watch Inauguration Video
          </a>
        </div>
      </div>
    </div>

    <!-- MEETING DAYS -->
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="card border-0 shadow-sm p-4 text-center">
          <h3 class="fw-bold text-primary mb-3">Meeting Days</h3>
          <p class="fs-5 text-muted mb-0">
            <strong>3rd Sunday of Every Month</strong><br>
            <small>(Except Picnic, Convention, Summit, and End of Year Events)</small>
          </p>
        </div>
      </div>
    </div>

    <!-- EVENTS -->
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="card border-0 shadow-sm p-4">
          <h3 class="fw-bold text-primary mb-4">Events</h3>

          <div class="row text-center">
            <div class="col-md-6 mb-3">
              <a href="#" class="btn btn-primary w-100 py-3 fw-semibold">
                Past Events
              </a>
            </div>

            <div class="col-md-6 mb-3">
              <a href="#" class="btn btn-outline-primary w-100 py-3 fw-semibold">
                Upcoming Events
              </a>
            </div>
          </div>

          <p class="text-muted mt-3">
            Clicking on either option will display all uploaded events. Upcoming conventions
            will include secure payment options via <strong>Stripe</strong> and
            <strong>Eventbrite</strong>.
          </p>
        </div>
      </div>
    </div>

    <!-- ADVERT PLACEMENT -->
    <div class="row">
      <div class="col-md-12">
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
    </div>

  </div>
</section>



   



@endsection