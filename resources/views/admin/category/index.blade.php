@extends('admin.layouts.master')

@section('main-content')
<div class="card mb-4">
    <h5 class="card-header font-bold">Add a Category</h5>
    @if (session('category_status'))
    <div class="alert alert-success">
        {{ session('category_status') }}
    </div>
    @endif

    <div class="card-body">
        <form method="POST" action="{{ route('admin.category.create') }}">
            @csrf
            <div class="form-group">
                <label>Category Name <span class="text-danger">*</span></label>
                <input type="text" name="category" class="form-control" placeholder="Enter Category">
                @error('category')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success mt-2">Submit Category</button>
        </form>
    </div>
</div>

<div class="card mb-4">
    <h5 class="card-header font-bold">Add a Event Category</h5>
    @if (session('brand_status'))
    <div class="alert alert-success">
        {{ session('brand_status') }}
    </div>
    @endif

    <div class="card-body">
        <form method="POST" action="{{ route('admin.brand.create') }}">
            @csrf
            <div class="form-group">
                <label>Event  Name <span class="text-danger">*</span></label>
                <input type="text" name="brand" class="form-control" placeholder="Enter Event category">
                @error('brand')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit Event Category </button>
        </form>
    </div>
</div>

{{-- CATEGORY TABLE --}}
<div class="container mt-4">
    <h4>All Categories</h4>
    <table class="table table-bordered">
        <thead>
            <tr><th>#</th><th>Name</th><th>Date Created</th></tr>
        </thead>
        <tbody>
            @forelse ($category as $i => $cat)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $cat->category }}</td>
                <td>{{ $cat->created_at->format('F j, Y g:i A') }}</td>
            </tr>
            @empty
            <tr><td colspan="3" class="text-center">No categories yet.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- BRAND TABLE --}}
<div class="container mt-4">
    <h4>All Event Categories</h4>
    <table class="table table-bordered">
        <thead>
            <tr><th>#</th><th>Name</th><th>Date Created</th></tr>
        </thead>
        <tbody>
            @forelse ($brands as $i => $brand)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $brand->eventcat }}</td>
                <td>{{ $brand->created_at->format('F j, Y g:i A') }}</td>
            </tr>
            @empty
           

 <tr><td colspan="3" class="text-center">No brands yet.</td></tr>
            @endforelse
        </tbody>
        </table>

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