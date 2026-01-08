@extends('frontend.layouts.master')

@section('title', 'Who We Are')

@section('main-content')
<section class="py-5 bg-light">
    <div class="container">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-uppercase text-primary">Who We Are</h1>
            <div class="mx-auto mt-3" style="width: 80px; height: 4px; background-color: #0d6efd;"></div>
        </div>

        <!-- Main Content Card -->
        <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5">
            <div class="row align-items-center g-4">

                <!-- Image -->
                <div class="col-md-5 text-center">
                    <img 
                        src="{{ asset('img/WhatsApp Image 2026-01-05 at 12.13.58 AM (1).jpeg') }}" 
                        alt="UPU Canada National Body" 
                        class="img-fluid rounded-4 shadow-sm"
                    >
                </div>

                <!-- Text -->
                <div class="col-md-7">
                    <h4 class="fw-bold text-dark mb-3">
                        Urhobo Progress Union (UPU) of Canada – National Body
                    </h4>

                    <p class="fs-5 text-muted">
                        The <strong>Urhobo Progress Union (UPU) of Canada</strong> is the officially recognized
                        national umbrella organization representing Urhobo people across Canada.
                        We are a <strong>cultural</strong>, <strong>non-profit</strong>, and
                        <strong>community-driven</strong> organization committed to preserving,
                        promoting, and advancing Urhobo heritage, unity, and values within the
                        Canadian multicultural landscape.
                    </p>

                    <p class="fs-5 text-muted">
                        Established to strengthen identity, belonging, and collaboration among
                        Urhobo descendants in Canada, <strong>UPU Canada</strong> serves as a central
                        platform for advocacy, cultural education, youth empowerment, and social
                        development.
                    </p>

                    <p class="fs-5 text-muted">
                        Our leadership embodies the <strong>strength and dignity</strong> of the Urhobo nation.
                        With the formal inauguration of the National Body on
                        <strong>April 27, 2025</strong>, under the globally recognized UPU Worldwide
                        structure, we now operate with a unified voice, a clear vision, and a
                        strategic purpose.
                    </p>
                </div>
            </div>

            <!-- Mission -->
            <div class="mt-5">
                <h3 class="fw-bold text-primary mb-3">Our Mission</h3>
                <ul class="fs-5 text-muted ps-3">
                    <li class="mb-2"><strong>Promote</strong> Urhobo language, history, and traditions</li>
                    <li class="mb-2"><strong>Empower</strong> Urhobo youth and families through mentorship and support</li>
                    <li class="mb-2"><strong>Organize</strong> cultural events, festivals, and outreach initiatives</li>
                    <li class="mb-2"><strong>Advocate</strong> for the interests of Urhobo people in Canada</li>
                    <li class="mb-2"><strong>Connect</strong> and collaborate with Urhobo communities worldwide</li>
                </ul>
            </div>

            <!-- Closing -->
            <p class="fs-5 text-muted mt-4">
                At <strong>UPU Canada</strong>, we believe in <strong>progress through unity</strong>.
                We remain committed to uplifting our people, preserving our identity, and
                contributing positively to the wider society we call home.
            </p>

            <div class="text-end mt-4">
                <h4 class="fw-bold text-primary fst-italic">Urhobo Wado!</h4>
            </div>
        </div>

    </div>
</section>
@endsection

