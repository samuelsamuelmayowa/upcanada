@extends('frontend.layouts.master')
@section('title','CANADA  || HOME PAGE')
@section('main-content')

    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100"  src="img/to.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Urhobo Progress Union (UPU) Canada</h1>
                               <p class="text-2xl md:text-4xl  max-w-4xl mx-auto leading-relaxed text-center font-semibold">
    A united national body connecting all Urhobo people across Canada — preserving our heritage, empowering our future, and fostering cultural pride in a multicultural society.
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


    <!-- About Start -->
    <!-- <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                        <h1 class="display-6 mb-4">We Help Students To Pass Test & Get A License On The First Try</h1>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Fully Licensed
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Online Tracking
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Afordable Fee 
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Best Trainers
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+0123456789">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3">+012 345 6789</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About End -->


    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="text-primary text-uppercase mb-2">Our Misson</h1>
                <!-- <h1 class="display-6 mb-4">Our Courses Upskill You With Driving Training</h1> -->
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">1</div>
                            <!-- <h5 class="mb-3">Automatic Car Lessons</h5> -->
                            <p>  The Urhobo Progress Union (UPU) of Canada National is the officially recognized national umbrella organization representing Urhobo people across Canada.
                We are a cultural, non-profit, and community-driven body committed to the preservation, promotion, and advancement of Urhobo heritage, unity, and values
                within the Canadian multicultural landscape.</p>
                            <!-- <ol class="breadcrumb justify-content-center mb-0"> -->
                                <!-- <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> -->
                                <!-- <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li> -->
                            <!-- </ol> -->
                        </div>
                        <!-- <div class="position-relative mt-auto"> -->
                            <!-- <img class="img-fluid" src="img/courses-1.jpg" alt=""> -->
                            <!-- <div class="courses-overlay"> -->
                                <!-- <a class="btn btn-outline-primary border-2" href="">Read More</a> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">2</div>
                            <!-- <h5 class="mb-3">Highway Driving Lesson</h5> -->
                            <p> Founded to foster a strong sense of identity, belonging, and collaboration among Urhobo descendants in Canada, UPU Canada serves as a central platform for advocacy,
                cultural education, youth empowerment, and social development.</p>
                            <!-- <ol class="breadcrumb justify-content-center mb-0"> -->
                                <!-- <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> -->
                                <!-- <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li> -->
                            <!-- </ol> -->
                        </div>
                        <!-- <div class="position-relative mt-auto"> -->
                            <!-- <img class="img-fluid" src="img/courses-2.jpg" alt=""> -->
                            <!-- <div class="courses-overlay"> -->
                                <!-- <a class="btn btn-outline-primary border-2" href="">Read More</a> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">3</div>
                            <!-- <h5 class="mb-3">International Driving</h5> -->
                            <p>  With the inauguration of the National Body on April 27, 2025, under the globally recognized structure of the UPU Worldwide, we now operate with a unified voice,
                clear vision, and strategic purpose ,At UPU Canada, we believe in progress through unity, and we stand firm in our mission to uplift our people, preserve our identity,
                and contribute positively to the communities we are part of.</p>
                            <!-- <ol class="breadcrumb justify-content-center mb-0"> -->
                                <!-- <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> -->
                                <!-- <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li> -->
                            <!-- </ol> -->
                        </div>
                        <!-- <div class="position-relative mt-auto"> -->
                            <!-- <img class="img-fluid" src="img/courses-3.jpg" alt=""> -->
                            <!-- <div class="courses-overlay"> -->
                                <!-- <a class="btn btn-outline-primary border-2" href="">Read More</a> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-lg-8 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-center p-5">
                        <h1 class="mb-4">Send a request</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name">
                                        <label for="gname">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email">
                                        <label for="gmail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- <div class="form-floating"> -->
                                        <!-- <input type="text" class="form-control border-0" id="cname" placeholder="Child Name"> -->
                                        <!-- <label for="cname">Courses Type</label> -->
                                    <!-- </div> -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- <div class="form-floating"> -->
                                        <!-- <input type="text" class="form-control border-0" id="cage" placeholder="Child Age"> -->
                                        <!-- <label for="cage">Car Type</label> -->
                                    <!-- </div> -->
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->



@endsection