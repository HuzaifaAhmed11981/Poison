@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('BlogPost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Blog Title</label>
                                    <input type="text" class="form-control" name="blog_title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Blog Category Name</label>
                                    <input type="text" class="form-control" name="blog_category_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Blog Image</label>
                                    <input type="file" class="form-control" name="blog_img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Blog Description</label>
                                    <textarea class="form-control" name="blog_desp"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Add Blog</button>
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
                            <th>Blog Title</th>
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        @forelse($data as $key => $value)
                            <tr>
                                <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $value->blog_title }}</td>
                                <td>{{ $value->blog_category_name }}</td>
                                <td><img src="{{ asset('uploads/images') }}/{{ $value->blog_img }}"
                                        style="width:50px;height:50px;object-fit:cover;"></td>
                                <td>{{ Str::limit(strip_tags($value->blog_desp), 20) }}</td>
                                <td>
                                    <a class="btn btn-danger" href="{{ route('BlogDelete', $value->id) }}"><i
                                            class="fas fa-trash-alt"></i></a>
                                    <a class="btn btn-warning" href="{{ route('BlogView', $value->id) }}"><i
                                            class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No Data Found.</td>
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
    @if (session('toaster.success'))
        <script>
            toastr.success('{{ session('toaster.success') }}')
        </script>
    @endif
@endsection
