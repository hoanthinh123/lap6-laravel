@extends('client.layout')

@section('content')
<div class="card-body">
    <h1 class="text-center">Cập nhập user</h1>
    @if (session('message'))
    <div class="alert alert-primary">
        {{ session('message') }}
    </div>
@endif
    <form action="{{ route('client.user.update',$user)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Full Name -->
        <input type="hidden" name="id" value="{{$user->id}}">
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" name="fullname" id="" class="form-control" placeholder="Enter your fullname" value="{{$user->fullname}}">
        </div>
        @error('fullname')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <!-- Username -->
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="{{$user->username}}" id="username"
                placeholder="Enter your username">
        </div>
        @error('username')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}"
                placeholder="Enter your email">
        </div>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <!-- avata -->
        <div class="mb-3">
            <label for="avatar" class="form-label">Avata</label>
            <input type="file" name="avatar" class="form-control"
                placeholder="Enter your avatar" value="{{$user->avatar}}">
                <img src="{{ asset('storage') . '/' . $user->avatar }}" width="150" alt=" {{ $user->username }}">
        </div>
        @error('avatar')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      
      
        <!-- Submit Button -->
        <div class="">
            <button type="submit" class="btn btn-primary">Update user</button>
            <a href="{{route('client.index')}}" class="btn btn-success">Quay Lại</a>
        </div>
    </form>
</div>
@endsection