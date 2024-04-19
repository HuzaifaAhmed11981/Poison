@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('PortfolioPost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Portfolio Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Online URL</label>
                                    <input type="text" class="form-control" name="online_url">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Portfolio Image</label>
                                    <input type="file" class="form-control" name="portfolio_img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Online Platform</label>
                                    <select name="online_platform" class="form-control">
                                        <option value="">select option</option>
                                        <option value="youtube">Youtube</option>
                                        <option value="soundcloud">Sound Cloud</option>
                                        <option value="vimeo">Vimeo</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Add Portfolio</button>
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
                            <th>Portfolio Title</th>
                            <th>URL</th>
                            <th>Platform</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @forelse($data as $key => $value)
                            <tr>
                                <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->online_url }}</td>
                                <td>{{ $value->online_platform }}</td>

                                <td><img src="{{ asset('uploads/images') }}/{{ $value->portfolio_img }}"
                                        style="width:50px;height:50px;object-fit:cover;"></td>

                                <td>
                                    <a class="btn btn-danger" href="{{ route('PortfolioDelete', $value->id) }}"><i
                                            class="fas fa-trash-alt"></i></a>
                                    <a class="btn btn-warning" href="{{ route('PortfolioView', $value->id) }}"><i
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
