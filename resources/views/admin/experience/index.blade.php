@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('ExperiencePost') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Job Role</label>
                                    <input type="text" class="form-control" name="job_role">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Job Place</label>
                                    <input type="text" class="form-control" name="job_place">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Experience  Description</label>
                                    <textarea class="form-control" name="exp_desp"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Time period</label>
                                    <input type="text" class="form-control" name="time_period"
                                        placeholder="2018 - running">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Add Experience</button>
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
     <th>Job Role</th>
     <th>Job Place</th>
     <th>Experience Description</th>
     <th>Time Period</th>
     <th>Action</th>
 </tr>
 @forelse($data as $key => $value)
     <tr>
        <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->index + 1  }}</td>
        <td>{{ $value->job_role }}</td>
        <td>{{ $value->job_place }}</td>
        <td>{{ $value->exp_desp }}</td>
        <td>{{ $value->time_period }}</td>
      <td>
      <a class="btn btn-danger" href="{{ route('ExperienceDelete', $value->id) }}"><i class="fas fa-trash-alt"></i></a>
      <a class="btn btn-warning" href="{{ route('ExperienceView', $value->id) }}"><i class="fas fa-edit"></i></a>
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
