@extends('layouts.master')

@section('content')
<h1 class="text-center">Portfolio Details</h1>
<div class="row">
<div class="col-md-8 m-auto">
<div class="card">
<div class="card-body">

<form action="{{ route('PortfolioDetailUpdate') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="form-group">
 <label for="">Title</label>
 <input type="text" class="form-control" name="title" value="{{ $data['title'] }}">
</div>
<div class="form-group">
 <label for="">Description</label>
<textarea name="desp" class="form-control">
    {{ e($data['desp']) }}
</textarea>

</div>
<div class="form-group">
 <label for="">Client Name</label>
 <input type="text" class="form-control" name="client_name" value="{{ $data['client_name'] }}">
</div>
<div class="form-group">
 <label for="">Date</label>
 <input type="text" class="form-control" name="date" value="{{ $data['date'] }}">
</div>

<div class="form-group">
    <label for="">Image one(modal top large)</label>
    <input type="file" name="detail_img1" class="form-control">
    <img src="{{ asset('uploads/images') }}/{{ $data['detail_img1'] }}" alt="" style="width:100px;height:100px;object-fit:cover;">

</div>
<div class="form-group">
    <label for="">Image Two(modal middle large)</label>
    <input type="file" name="detail_img2" class="form-control">
    <img src="{{ asset('uploads/images') }}/{{ $data['detail_img2'] }}" alt="" style="width:100px;height:100px;object-fit:cover;">

</div>
<div class="form-group">
    <label for="">Image Three(modal bottom left)</label>
    <input type="file" name="detail_img3" class="form-control">
    <img src="{{ asset('uploads/images') }}/{{ $data['detail_img3'] }}" alt="" style="width:100px;height:100px;object-fit:cover;">

</div>
<div class="form-group">
    <label for="">Image Four(modal bottom right)</label>
    <input type="file" name="detail_img4" class="form-control">
    <img src="{{ asset('uploads/images') }}/{{ $data['detail_img4'] }}" alt="" style="width:100px;height:100px;object-fit:cover;">

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
