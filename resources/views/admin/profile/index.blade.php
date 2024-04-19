@extends('layouts.master')

@section('content')
    <h1 class="text-center">Change Profile</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Update Password</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('ChangePassword') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Old password</label>
                            <input type="password" class="form-control" name="old_password" autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <label for="">New password</label>
                            <input type="text" class="form-control" name="new_password">
                          @error('new_password')
                              <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Confirm password</label>
                            <input type="text" class="form-control" name="new_password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Update Email</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('ChangeEmail') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $data['email'] }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @if (session('toaster.success'))
        <script>
            toastr.success('{{ session('toaster.success') }}');
        </script>
    @endif
    @if(session('error'))
        <script>
            toastr.warning('{{ session('error') }}');
        </script>
    @endif


@endsection
