@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('TestimonialPost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Customer Name</label>
                                    <input type="text" class="form-control" name="customer_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Customer Profession</label>
                                    <input type="text" class="form-control" name="customer_profession">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Customer Image</label>
                                   <input type="file" class="form-control" name="customer_img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Customer Message</label>
                                    <input type="text" class="form-control" name="customer_message">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Add Testimonial</button>
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
     <th>Customer Name</th>
     <th>Customer Profession</th>
     <th>Customer Image</th>
     <th>Customer Message</th>
     <th>Action</th>
 </tr>
 @forelse($data as $key => $value)
     <tr>
        <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->index + 1  }}</td>
        <td>{{ $value->customer_name }}</td>
        <td>{{ $value->customer_profession }}</td>
        <td><img src="{{ asset('uploads/images') }}/{{ $value->customer_img }}" style="width:50px;height:50px;object-fit:cover;"></td>
        <td>{{ $value->customer_message }}</td>
      <td>
      <a class="btn btn-danger" href="{{ route('TestimonialDelete', $value->id) }}"><i class="fas fa-trash-alt"></i></a>
      <a class="btn btn-warning" href="{{ route('TestimonialView', $value->id) }}"><i class="fas fa-edit"></i></a>
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
