@extends('layouts.master')

@section('content')
<h1 class="text-center">Title Settings</h1>
<div class="row">
<div class="col-md-8 m-auto">
<div class="card">
<div class="card-body">

<form action="{{ route('TitleSetting') }}" method="POST">
    @csrf
<div class="form-group">
 <label for="">About Page Title</label>
 <input type="text" class="form-control" name="about_title" value="{{ $data['about_title'] !== '' ? $data['about_title'] : '' }}">
</div>
<div class="form-group">
 <label for="">About Page Subtitle</label>
 <input type="text" class="form-control" name="about_subtitle" value="{{ $data['about_subtitle'] !== '' ? $data['about_subtitle'] : '' }}">
</div>
<div class="form-group">
    <label for="">Resume Page Title</label>
    <input type="text" class="form-control" name="resume_title" value="{{ $data['resume_title'] !== '' ? $data['resume_title'] : '' }}">
   </div>
   <div class="form-group">
    <label for="">Portfolio Page Title</label>
    <input type="text" class="form-control" name="portfolio_title" value="{{ $data['portfolio_title'] !== '' ? $data['portfolio_title'] : '' }}">
   </div>
   <div class="form-group">
    <label for="">Service Page Title</label>
    <input type="text" class="form-control" name="service_title" value="{{ $data['service_title'] !== '' ? $data['service_title'] : '' }}">
   </div>
   <div class="form-group">
    <label for="">Testimonial Page Title</label>
    <input type="text" class="form-control" name="testimonial_title" value="{{ $data['testimonial_title'] !== '' ? $data['testimonial_title'] : '' }}">
   </div>
   <div class="form-group">
    <label for="">Blog Page Title</label>
    <input type="text" class="form-control" name="blog_title" value="{{ $data['blog_title'] !== '' ? $data['blog_title'] : '' }}">
   </div>
   <div class="form-group">
    <label for="">Contact Page Title</label>
    <input type="text" class="form-control" name="contact_title" value="{{ $data['contact_title'] !== '' ? $data['contact_title'] : '' }}">
   </div>
<div class="form-group">
<button type="submit" class="btn btn-primary">Save Changes</button>
</div>

 </form>
</div>
</div>
</div>
</div>

@endsection
@section('js')
@if(session('toaster.success'))
    <script>

        toastr.success('{{ session("toaster.success") }}');
    </script>
@endif
@endsection
