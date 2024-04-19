@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('BlogUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
 <input type="hidden" name="blog_id" value="{{ $data->id }}">
 <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Blog Title</label>
            <input type="text" class="form-control" name="blog_title" value="{{ $data->blog_title }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Blog Category Name</label>
            <input type="text" class="form-control" name="blog_category_name" value="{{ $data->blog_category_name }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Blog Image</label>
            <input type="file" class="form-control" name="blog_img">
            <img src="{{ asset('uploads/images') }}/{{ $data->blog_img }}" alt="" style="width:50px;height:50px;object-fit:cover;">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Blog Description</label>
            <textarea class="form-control" name="blog_desp">{{ e($data->blog_desp) }}</textarea>
        </div>
    </div>
</div>

                        <button class="btn btn-primary" type="submit">Edit Blog</button>
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
