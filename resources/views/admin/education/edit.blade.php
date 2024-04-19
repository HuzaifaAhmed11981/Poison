@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('EducationUpdate') }}" method="POST">
                        @csrf
 <input type="hidden" name="education_id" value="{{ $data->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Course Outline</label>
                                    <input value="{{ $data->course_outline }}" type="text" class="form-control" name="course_outline">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">University Name</label>
                                    <input value="{{ $data->university_name }}" type="text" class="form-control" name="university_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Course Description</label>
                                    <textarea class="form-control" name="course_desp">
 {{ e($data->course_desp) }}
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
                        <button class="btn btn-primary" type="submit">Edit Education</button>
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
