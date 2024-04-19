@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('ServicePost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Service Title</label>
                                    <input type="text" class="form-control" name="service_title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Service Sub Title</label>
                                    <input type="text" class="form-control" name="service_subtitle">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Service Image</label>
                                    <input type="file" class="form-control" name="service_img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Service Icon (svg)</label>
                                    <input type="file" accept=".svg" class="form-control" name="service_icon">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Service Description</label>
                                    <textarea class="form-control" name="service_desp"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Add Service</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:10px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                   <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>SL</th>
                            <th>Service Title</th>
                            <th>Sub Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Icon</th>
                            <th>Action</th>
                        </tr>
                        @forelse($data as $key => $value)
                            <tr>
                                <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $value->service_title }}</td>
                                <td>{{ Str::limit(strip_tags($value->service_subtitle),10) }}</td>
                                <td>{{ Str::limit(strip_tags($value->service_desp), 35) }}</td>
                                <td><img src="{{ asset('uploads/images') }}/{{ $value->service_img }}"
                                        style="width:50px;height:50px;object-fit:cover;"></td>
                                <td><img src="{{ asset('uploads/images') }}/{{ $value->service_icon }}"
                                        style="width:50px;height:50px;object-fit:cover;"></td>

                                <td>
                                    <a class="btn btn-danger" href="{{ route('ServiceDelete', $value->id) }}"><i
                                            class="fas fa-trash-alt"></i></a>
                                    <a class="btn btn-warning" href="{{ route('ServiceView', $value->id) }}"><i
                                            class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No Data Found.</td>
                            </tr>
                        @endforelse

                    </table>
                </div>
                    {{ $data->links() }}
                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
     @if($errors->any())
         @foreach($errors->all() as $error)
             <script>
                toastr.warning("{{ $error }}");
             </script>
         @endforeach
     @endif
    @if (session('toaster.success'))
        <script>
            toastr.success('{{ session('toaster.success') }}')
        </script>
    @endif
@endsection
