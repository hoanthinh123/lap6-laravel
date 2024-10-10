@extends('admin.layout')
@section('title')
    Admin
@endsection
@section('content')
    <div class="w-full ">
        <h1 class="w-full bg-secondary p-2 m-1">User</h1>
        @if (session('message'))
            <div class="alert alert-primary">
                {{ session('message') }}
            </div>
        @endif
        @if (session('messagee'))
            <div class="alert alert-danger">
                {{ session('messagee') }}
            </div>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>fullname</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>avatar</th>
                    <th>role</th>
                    <th>active</th>
                    <th>
                        <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Thêm</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $index++ }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>
                            <img src="{{ asset('storage') . '/' . $user->avatar }}" width="60" alt="">
                        </td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->active }}</td>
                        <td>
                            <a href="{{route('admin.users.edit', $user)}}" class="btn btn-primary mx-1">Edit</a>

                            <form action="{{ route('admin.users.destroy', $user) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Bạn có muốn xóa không')"
                                    class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection
