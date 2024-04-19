@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('ServiceUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
 <input type="hidden" name="service_id" value="{{ $data->id }}">
 <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Service Title</label>
            <input type="text" class="form-control" name="service_title" value="{{ $data->service_title }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Service Sub Title</label>
            <input type="text" class="form-control" name="service_subtitle" value="{{ $data->service_subtitle }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Service Image</label>
            <input type="file" class="form-control" name="service_img">
            <img src="{{ asset('uploads/images') }}/{{ $data->service_img }}" alt="" style="width:50px;height:50px;object-fit:cover;">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Blog Icon (svg)</label>
            <input type="file" class="form-control" accept=".svg" name="service_icon">
            <img src="{{ asset('uploads/images') }}/{{ $data->service_icon }}" alt="" style="width:50px;height:50px;object-fit:cover;">

        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="">Service Description</label>
            <textarea class="form-control" name="service_desp">{{ e($data->service_desp) }}</textarea>
        </div>
    </div>
</div>

                        <button class="btn btn-primary" type="submit">Edit Service</button>
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
