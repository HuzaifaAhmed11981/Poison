@extends('layouts.master')


@section('content')

  <div class="row" style="margin-top:10px">
  <div class="col-md-12">
    <div class="card">
    <div class="card-body">
        <div class="table-responsive">
  <table class="table table-hover">
 <tr>
     <th>SL</th>
     <th>Name</th>
     <th>Email</th>
     <th>Phone</th>
     <th>Subject</th>
     <th>Message</th>

     <th>Action</th>
 </tr>
 @forelse($data as $key => $value)
     <tr>
        <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->index + 1  }}</td>
        <td>{{ $value->user_name }}</td>
        <td>{{ $value->user_email }}</td>
        <td>{{ $value->user_phone }}</td>
        <td>{{ $value->user_subject }}</td>
        <td>{{ $value->user_message }}</td>

      <td>
      <a class="btn btn-danger" href="{{ route('MessageDelete', $value->id) }}"><i class="fas fa-trash-alt"></i></a>
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
    @if (session('toaster.success'))
        <script>
            toastr.success('{{ session('toaster.success') }}')
        </script>
    @endif
@endsection
