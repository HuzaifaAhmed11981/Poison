@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('SoftwareSkillUpdate') }}" method="POST">
                        @csrf
                        <input type="hidden" name="soft_skill_id" value="{{ $data->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Software Skill Name</label>
                                    <input value="{{ $data->soft_skill_name }}" type="text" class="form-control" name="soft_skill_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Software Skill Percentage</label>
                                    <input value="{{ $data->soft_skill_percentage }}" type="text" class="form-control" name="soft_skill_percentage">
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Edit Software Skill</button>
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
