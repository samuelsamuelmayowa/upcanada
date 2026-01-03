@extends('frontend.layouts.master')

@section('title', $event->name)

@section('main-content')
<div class="container mt-5" style="font-weight: 400;">
    
    {{-- Event Banner --}}
    <div class="row">
        <div class="col-12">
            <div class="rounded shadow-sm overflow-hidden" style="height: 450px;">
                <img src="{{ asset($event->photo) }}" alt="{{ $event->name }}" class="img-fluid w-100 h-100" style="object-fit: cover;">
            </div>
        </div>
    </div>

    {{-- Event Info --}}
    <div class="row mt-5">
        <div class="col-md-8">
            <h1 class="display-5 fw-bold">{{ $event->name }}</h1>
            <p class="text-muted">
                <strong>Start Date:</strong> {{ \Carbon\Carbon::parse($event->start_date)->format('F j, Y g:i A') }} |
                <strong>End Date:</strong> {{ \Carbon\Carbon::parse($event->end_date)->format('F j, Y g:i A') }}
            </p>

            <p class="lead mt-3">{{ $event->eventinfo }}</p>

            {{-- Event Category --}}
            <div class="my-4">
                <h5 class="mb-2">Category:</h5>
                <span class=" bg-secondary py-2 px-3 font-bold">{{ $event->category }}</span>
            </div>

            {{-- Tickets Section --}}
            <div class="mt-5">
                <h4 class="mb-3">Tickets</h4>
                <div class="card p-4 border shadow-sm">
                    <p class="mb-2"><strong>Price:</strong> ₦{{ number_format($event->price) }}</p>
                    <button type="button" class="btn btn-primary mt-3">Get Ticket</button>
                </div>
            </div>
        </div>

        {{-- Sidebar --}}
        <div class="col-md-4">
            <div class="card border shadow-sm p-4">
                <h5 class="mb-3">Event Details</h5>
                <p><strong>Location:</strong><br>{{ $event->location }}</p>
                <p><strong>Organized by:</strong><br>{{ $event->organizer }}</p>
                <p><strong>Contact:</strong><br>{{ $event->contact_email }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
