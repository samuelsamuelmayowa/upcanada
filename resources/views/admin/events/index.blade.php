@extends('admin.layouts.master')

@section('main-content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="row">
    <div class="col-md-12">
      @include('admin.layouts.notification')
    </div>
  </div>
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Events Lists</h6>
    <a class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Product</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      @if(count($events)>0)
      <table class="table table-bordered" id="product-dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>S.N.</th>
            <th>Event Title</th>
            <th>Category</th>
            <th>Infomation</th>
            <th>Photo</th>
            <!-- <th>Status</th> -->
            <th>Actions</th>

          </tr>
        </thead>

        <tbody>
          @foreach($events as $event)
          <tr>
           
            <td>{{ $event->category }}</td>
            <td>{{ $event->eventinfo}}</td>
            <td>
              @if($event->photo)
              <img src="{{ asset($event->photo) }}" class="img-fluid zoom" style="max-width:80px" alt="Event Photo">
              @else
              <img src="{{ asset('backend/img/thumbnail-default.jpg') }}" class="img-fluid" style="max-width:80px" alt="Default Photo">
              @endif
            </td>

            <!-- <td>
        @if($event->status == 'active')
            <span class="badge badge-success">{{ $event->status }}</span>
        @else
            <span class="badge badge-warning">{{ $event->status }}</span>
        @endif
    </td> -->
            <td>
              <a href="{{ route('admin.product.edit', $event->id) }}" class="btn btn-sm btn-primary">Edit</a>
            </td>
          </tr>

          @endforeach
        </tbody>

      </table>

      @else
      <h6 class="text-center">No Products found!!! Please create Product</h6>
      @endif
    </div>
  </div>
</div>
@endsection

@push('styles')
<link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
  .clickable-row {
    cursor: pointer;
  }

  .clickable-row:hover {
    background-color: #f1f1f1;
  }

  div.dataTables_wrapper div.dataTables_paginate {
    display: none;
  }

  .zoom {
    transition: transform .2s;
    /* Animation */
  }

  .zoom:hover {
    transform: scale(5);
  }
</style>
@endpush

@push('scripts')

<!-- Page level plugins -->
<script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const rows = document.querySelectorAll(".clickable-row");
    rows.forEach(function(row) {
      row.addEventListener("click", function() {
        const url = this.getAttribute("data-href");
        if (url) {
          window.location.href = url;
        }
      });
    });
  });
</script>
<script>
  $('#product-dataTable').DataTable({
    "scrollX": false,
    "columnDefs": [{
      "orderable": false,
      "targets": [10, 11, 12]
    }]
  });

  // Sweet alert

  function deleteData(id) {

  }
  document.addEventListener("DOMContentLoaded", function() {
    const rows = document.querySelectorAll(".clickable-row");
    rows.forEach(function(row) {
      row.addEventListener("click", function() {
        const url = this.getAttribute("data-href");
        if (url) {
          window.location.href = url;
        }
      });
    });
  });
</script>
<script>
  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('.dltBtn').click(function(e) {
      var form = $(this).closest('form');
      var dataID = $(this).data('id');
      // alert(dataID);
      e.preventDefault();
      swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this data!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
          } else {
            swal("Your data is safe!");
          }
        });
    })
  })
</script>
@endpush

 