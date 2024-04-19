@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('EducationPost') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Course Outline</label>
                                    <input type="text" class="form-control" name="course_outline">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">University Name</label>
                                    <input type="text" class="form-control" name="university_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Course Description</label>
                                    <textarea class="form-control" name="course_desp"></textarea>
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
                        <button class="btn btn-primary" type="submit">Add Education</button>
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
     <th>Course Outline</th>
     <th>Course Desp</th>
     <th>University Name</th>
     <th>Time Period</th>
     <th>Action</th>
 </tr>
 @forelse($data as $key => $value)
     <tr>
        <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->index + 1  }}</td>
        <td>{{ $value->course_outline }}</td>
        <td>{{ $value->course_desp }}</td>
        <td>{{ $value->university_name }}</td>
        <td>{{ $value->time_period }}</td>
      <td>
      <a class="btn btn-danger" href="{{ route('EducationDelete', $value->id) }}"><i class="fas fa-trash-alt"></i></a>
      <a class="btn btn-warning" href="{{ route('EducationView', $value->id) }}"><i class="fas fa-edit"></i></a>
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
