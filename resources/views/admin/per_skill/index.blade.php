@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('PersonalSkillPost') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Personal Skill Name</label>
                                    <input type="text" class="form-control" name="per_skill_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Personal Skill Percentage</label>
                                    <input type="number" class="form-control" name="per_skill_percentage">
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Add Personal Skill</button>
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
     <th>Personal Skill Name</th>
     <th>Personal Skill Percentage</th>

     <th>Action</th>
 </tr>
 @forelse($data as $key => $value)
     <tr>
        <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->index + 1  }}</td>
        <td>{{ $value->per_skill_name }}</td>
        <td>{{ $value->per_skill_percentage }}</td>
      <td>
      <a class="btn btn-danger" href="{{ route('PersonalSkillDelete', $value->id) }}"><i class="fas fa-trash-alt"></i></a>
      <a class="btn btn-warning" href="{{ route('PersonalSkillView', $value->id) }}"><i class="fas fa-edit"></i></a>
      </td>
    </tr>
 @empty
     <tr>
        <td colspan="5" class="text-center">No Data Found.</td>
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
