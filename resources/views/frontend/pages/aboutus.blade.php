@extends('frontend.layouts.master')

@section('title', 'Who We Are')

@section('main-content')
<div class="container py-5">
    <h1 class="mb-4 text-center fw-bold text-uppercase text-primary">
        Who We Are
    </h1>

    <div class="row align-items-center">
        <div class="col-md-5 text-center mb-4 mb-md-0">
            <img src="{{ asset('img/whowe.jpg') }}" 
                 alt="UPU Canada Member" 
                 class="img-fluid rounded shadow">
        </div>
        <div class="col-md-7">
            <p class="lead fw-bold text-dark">
                Urhobo Progress Union (UPU) of Canada – National Body
            </p>

            <p class="fs-5">
                The <strong>Urhobo Progress Union (UPU) of Canada</strong> is the officially recognized 
                national umbrella organization representing Urhobo people across Canada. 
                We are a <strong>cultural</strong>, <strong>non-profit</strong>, and 
                <strong>community-driven</strong> body committed to the preservation, 
                promotion, and advancement of Urhobo heritage, unity, and values within 
                the Canadian multicultural landscape.
            </p>

            <p class="fs-5">
                Founded to foster a strong sense of identity, belonging, and collaboration among Urhobo descendants in Canada, 
                the <strong>UPU Canada</strong> serves as a central platform for advocacy, 
                cultural education, youth empowerment, and social development.
            </p>

            <p class="fs-5">
                Our leadership reflects the <strong>strength and dignity</strong> of the Urhobo nation. 
                With the inauguration of the National Body on <strong>April 27, 2025</strong>, under 
                the globally recognized structure of the UPU Worldwide, we now operate 
                with a unified voice, clear vision, and strategic purpose.
            </p>
        </div>
    </div>

    <h3 class="mt-5 fw-bold text-primary">Our Mission</h3>
    <ul class="fs-5">
        <li><strong>Promote</strong> Urhobo language, history, and traditions</li>
        <li><strong>Empower</strong> Urhobo youth and families through mentorship and support programs</li>
        <li><strong>Organize</strong> cultural events, festivals, and community outreach initiatives</li>
        <li><strong>Advocate</strong> for the interests of Urhobo people in Canada</li>
        <li><strong>Connect</strong> and collaborate with Urhobo communities worldwide</li>
    </ul>

    <p class="mt-4 fs-5">
        At <strong>UPU Canada</strong>, we believe in <strong>progress through unity</strong>, 
        and we stand firm in our mission to uplift our people, preserve our identity, 
        and contribute positively to the broader society we live in.
    </p>

    <h4 class="mt-5 text-end text-primary fw-bold"><em>Urhobo Wado!</em></h4>
</div>
@endsection
