@extends('admin.layouts.master')

@section('main-content')
<style>

</style>
<div class="card">
  <h5 class="card-header font-bold">Add An Events</h5>
  <div class="card-body">
    <form method="post" action="{{route('admin.events.store')}}" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
        <label for="inputTitle" class="col-form-label font-semibold">Title <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="name" placeholder="Enter Event  title" value="{{old('name')}}" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

       <div class="form-group">
        <label for="inputTitle" class="col-form-label font-semibold">Hours<span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="hours" placeholder="12:00-3:40pm" value="{{old('hours')}}" class="form-control">
        @error('hours')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

         <div class="form-group">
        <label for="inputTitle" class="col-form-label font-semibold">Location<span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="location" placeholder="event location" value="{{old('location')}}" class="form-control">
        @error('location')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

       <div class="form-group">
        <label for="inputTitle" class="col-form-label font-semibold">Organizer<span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="organizer" placeholder="organizer name" value="{{old('organizer')}}" class="form-control">
        @error('organizer')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

         <div class="form-group">
        <label for="inputTitle" class="col-form-label font-semibold">start date<span class="text-danger">*</span></label>
        <input id="inputTitle" type="date" name="start_date" placeholder="start date" value="{{old('start_date')}}" class="form-control">
        @error('start_date')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
     

         <div class="form-group">
        <label for="inputTitle" class="col-form-label font-semibold">start date<span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="contact_email" placeholder="start date" value="{{old('contact_email')}}" class="form-control">
        @error('contact_email')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
        <div class="form-group">
        <label for="inputTitle" class="col-form-label font-semibold">end date<span class="text-danger">*</span></label>
        <input id="inputTitle" type="date" name="end_date" placeholder="end date of the event" value="{{old('end_date')}}" class="form-control">
        @error('end_date')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>



      <div class="form-group">
        <label for="description" class="col-form-label">Event infomation </label>
        <textarea class="form-control" id="description" placeholder="event infomation" name="eventinfo">{{old('eventinfo')}}</textarea>
        @error('eventinfo')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      {{-- {{$categories}} --}}
      <div class="form-group">
        <label for="cat_id">Event Category <span class="text-danger">*</span></label>
        <select name="cat_id" id="cat_id" class="form-control" required>
          <option value="">--Select any category--</option>
          @foreach($eventcat as $cat)
          <option value="{{ $cat->id }}">{{ $cat->eventcat }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="inputPhoto" class="col-form-label">Photos <span class="text-danger">*</span></label>
        <div class="input-group">
          <input required type="file" class="form-control" name="photo">
        </div>
        @error('photo')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group mb-3">
        <button type="reset" class="btn btn-warning">Reset</button>
        <button class="btn btn-success" type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
  $('#lfm').filemanager('image');

  $(document).ready(function() {
    $('#summary').summernote({
      placeholder: "Write short description.....",
      tabsize: 2,
      height: 100
    });
  });

  $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Write detail description.....",
      tabsize: 2,
      height: 150
    });
  });
  // $('select').selectpicker();
</script>

<script>
  $('#cat_id').change(function() {
    var cat_id = $(this).val();
    // alert(cat_id);
    if (cat_id != null) {
      // Ajax call
      $.ajax({
        url: "/admin/category/" + cat_id + "/child",
        data: {
          _token: "{{csrf_token()}}",
          id: cat_id
        },
        type: "POST",
        success: function(response) {
          if (typeof(response) != 'object') {
            response = $.parseJSON(response)
          }
          // console.log(response);
          var html_option = "<option value=''>----Select sub category----</option>"
          if (response.status) {
            var data = response.data;
            // alert(data);
            if (response.data) {
              $('#child_cat_div').removeClass('d-none');
              $.each(data, function(id, title) {
                html_option += "<option value='" + id + "'>" + title + "</option>"
              });
            } else {}
          } else {
            $('#child_cat_div').addClass('d-none');
          }
          $('#child_cat_id').html(html_option);
        }
      });
    } else {}
  })
</script>
@endpush