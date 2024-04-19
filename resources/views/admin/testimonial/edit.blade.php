@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('TestimonialUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
 <input type="hidden" name="testimonial_id" value="{{ $data->id }}">
 <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Customer Name</label>
            <input type="text" class="form-control" name="customer_name" value="{{ $data->customer_name }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Customer Profession</label>
            <input type="text" class="form-control" name="customer_profession" value="{{ $data->customer_profession }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Customer Image</label>
           <input type="file" class="form-control" name="customer_img">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Customer Message</label>
            <input type="text" class="form-control" name="customer_message" value="{{ $data->customer_message }}">
        </div>
    </div>
</div>
                        <button class="btn btn-primary" type="submit">Edit Testimonial</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
@section('js')
    @if (session('toaster.success'))
        <script>
            toastr.success('{{ session('toaster.success') }}')
        </script>
    @endif
@endsection
