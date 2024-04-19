@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('PortfolioUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
 <input type="hidden" name="portfolio_id" value="{{ $data->id }}">
 <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Portfolio Title</label>
            <input type="text" class="form-control" name="title" value="{{ $data->title }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Online URL</label>
            <input type="text" class="form-control" name="online_url" value="{{ $data->online_url }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Portfolio Image</label>
            <input type="file" class="form-control" name="portfolio_img">
            <img src="{{ asset('uploads/images') }}/{{ $data->portfolio_img }}" alt="" style="width:50px;height:50px;object-fit:cover;">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Online Platform</label>
            <select name="online_platform" class="form-control">
                <option value="">select option</option>
                <option value="youtube" {{ $data->online_platform == 'youtube' ? 'selected':'' }}>Youtube</option>
                <option value="soundcloud" {{ $data->online_platform == 'soundcloud' ? 'selected':'' }}>Sound Cloud</option>
                <option value="vimeo" {{ $data->online_platform == 'vimeo' ? 'selected':'' }}>Vimeo</option>

            </select>
        </div>
    </div>
</div>
<button class="btn btn-primary" type="submit">Edit Portfolio</button>

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
