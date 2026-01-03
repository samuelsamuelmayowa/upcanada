@extends('frontend.layouts.master')
@section('title','CANADA BLOG || HOME PAGE')
@section('main-content')



<section id="event-detail" class="py-5">
  <div class="container">
    <div class="card mb-5 shadow-sm">
      <img src="{{ asset($event->image) }}" class="card-img-top" alt="{{ $event->title }}">
      <div class="card-body">
        <h3>{{ $event->title }}</h3>
        <p class="text-muted">
          <strong>Dates:</strong> {{ $event->start_date->format('d M Y') }} – {{ $event->end_date->format('d M Y') }}<br>
          <strong>Venue:</strong> {{ $event->venue }}
        </p>
        <p>{{ $event->description }}</p>
        <a href="{{ $event->ticket_url }}" target="_blank" class="btn btn-primary">Book Tickets</a>
      </div>
      <div class="card-footer text-muted d-flex justify-content-between">
        <small>{{ $event->location }}</small>
        <small>Hosted by {{ $event->organizer }}</small>
      </div>
    </div>

    @if ($event->gallery->isNotEmpty())
      <div class="row">
        @foreach ($event->gallery as $img)
          <div class="col-md-3"><img src="{{ asset($img->path) }}" class="img-fluid rounded mb-3" alt="Gallery Image"></div>
        @endforeach
      </div>
    @endif
  </div>
</section>


@endsection