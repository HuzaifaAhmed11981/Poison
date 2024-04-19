@extends('layouts.master')

@section('content')
<h1 class="text-center">Site Settings</h1>
<div class="row">
<div class="col-md-8 m-auto">
<div class="card">
<div class="card-body">

<form action="{{ route('SiteSetting') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="form-group">
 <label for="">Facebook URL</label>
 <input type="text" class="form-control" name="facebook_url" value="{{ $data['facebook_url'] !== '' ? $data['facebook_url'] : '' }}">
</div>
<div class="form-group">
 <label for="">Youtube URL</label>
 <input type="text" class="form-control" name="youtube_url" value="{{ $data['youtube_url'] !== '' ? $data['youtube_url'] : '' }}">
</div>
<div class="form-group">
 <label for="">Twitter URL</label>
 <input type="text" class="form-control" name="twitter_url" value="{{ $data['twitter_url'] !== '' ? $data['twitter_url'] : '' }}">
</div>
<div class="form-group">
 <label for="">Instagram URL</label>
 <input type="text" class="form-control" name="instagram_url" value="{{ $data['instagram_url'] !== '' ? $data['instagram_url'] : '' }}">
</div>
<div class="row">
<div class="col-md-6 col-sm-12">
 <div class="form-group">
    <label for="">Logo</label>
    <input type="file" name="logo" class="form-control">
 <div>
    <img src="{{ asset('uploads/images') }}/{{ $data['logo'] }}" alt="" style="width:100px;height:100px;object-fit:cover;">
 </div>
 </div>
</div>
<div class="col-md-6 col-sm-12">
 <div class="form-group">
    <label for="">CV(pdf format must)</label>
    <input type="file" name="cv" class="form-control" alt="No Image">
    <a href="{{ asset('uploads/pdf/cv.pdf') }}" target="_blank" style="text-decoration: underline">see your cv</a>
 </div>
</div>
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
