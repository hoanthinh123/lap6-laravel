@extends('client.layout')
@section('content')
<div class="login-box">
    <div class="row justify-content-center" style="min-height: 50vh;">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Tài Khoản Người Dùng</h2>

                <!-- Danh sách các mục tài khoản người dùng -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#" class="text-decoration-none">
                            <i class="bi bi-bag"></i> Đơn hàng của bạn
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('client.user.edit', $user)}}" class="text-decoration-none">
                            <i class="bi bi-pencil"></i> Cập nhật tài khoản
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('client.showpassword', $user)}}" class="text-decoration-none">
                            <i class="bi bi-lock"></i> Đổi mật khẩu
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="text-decoration-none text-danger">
                            <i class="bi bi-box-arrow-right"></i> Thoát
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
@endsection

        
