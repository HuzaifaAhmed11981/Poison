@extends('layouts.master')

@section('content')
<h1 class="text-center">My Details</h1>
<div class="row">
<div class="col-md-8 m-auto">
<div class="card">
<div class="card-body">

<form action="{{ route('MyDetailPost') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="form-group">
 <label for="">Name</label>
 <input type="text" class="form-control" name="name" value="{{ $data['name'] !== '' ? $data['name'] : '' }}">
</div>
<div class="form-group">
 <label for="">Date of Birth</label>
 <input type="text" class="form-control" name="birth_date" value="{{ $data['birth_date'] !== '' ? $data['birth_date'] : '' }}">
</div>
<div class="form-group">
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" value="{{ $data['email'] !== '' ? $data['email'] : '' }}">
   </div>
   <div class="form-group">
    <label for="">Phone</label>
    <input type="text" class="form-control" name="phone" value="{{ $data['phone'] !== '' ? $data['phone'] : '' }}">
   </div>
   <div class="form-group">
    <label for="">Address</label>
    <input type="text" class="form-control" name="address" value="{{ $data['address'] !== '' ? $data['address'] : '' }}">
   </div>
   <div class="form-group">
    <label for="">Nationality</label>
    <input type="text" class="form-control" name="nationality" value="{{ $data['nationaltiy'] !== '' ? $data['nationality'] : '' }}">
   </div>
   <div class="form-group">
    <label for="">Current Job Title</label>
    <input type="text" class="form-control" name="current_jobtitle" value="{{ $data['current_jobtitle'] !== '' ? $data['current_jobtitle'] : '' }}">
   </div>
   <div class="form-group">
    <label for="">Profile Picture</label>
    <input type="file" name="profile_picture" class="form-control">

  <img src="{{ asset('uploads/images') }}/{{ $data['profile_picture'] }}" alt="No Image" style="width:100px;height:100px;object-fit:cover;">
   </div>
   <div class="form-group">
    <label for="">Introductory Video</label>
    <input type="text" name="intro_video" class="form-control" value="{{ $data['intro_video'] !== '' ? $data['intro_video'] : '' }}">

   </div>

   <div class="form-group">
    <label for="">Big Description</label>
    <textarea  class="form-control" name="big_desp">{{ e($data['big_desp']) }}</textarea>
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
