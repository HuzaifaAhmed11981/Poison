@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('ExperienceUpdate') }}" method="POST">
                        @csrf
 <input type="hidden" name="experience_id" value="{{ $data->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Job Role</label>
                                    <input value="{{ $data->job_role }}" type="text" class="form-control" name="job_role">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Job Place</label>
                                    <input value="{{ $data->job_place }}" type="text" class="form-control" name="job_place">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Experience Description</label>
                                    <textarea class="form-control" name="exp_desp">
 {{ e($data->exp_desp) }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Time period</label>
                                    <input value="{{ $data->time_period }}" type="text" class="form-control" name="time_period"
                                        placeholder="2018 - running">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Edit Experience</button>
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
