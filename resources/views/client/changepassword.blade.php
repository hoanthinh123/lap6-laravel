@extends('client.layout')

@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('client.changepassword') }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="current_password" class="form-label">Mật khẩu hiện tại</label>
        <input type="password" class="form-control" id="current_password" name="current_password" required>
    </div>

    <div class="mb-3">
        <label for="new_password" class="form-label">Mật khẩu mới</label>
        <input type="password" class="form-control" id="new_password" name="new_password" required>
    </div>

    <div class="mb-3">
        <label for="new_password_confirmation" class="form-label">Xác nhận mật khẩu mới</label>
        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
    </div>

    <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
</form>
@endsection