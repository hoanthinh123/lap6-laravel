
    <!-- Header -->
    <header class="bg-light py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <h1 class="h3"><a href="{{route('client.home')}}" class="text-dark text-decoration-none"><img src="{{ asset('storage/avatars/logo.png')}}" width="180" alt=""></a></h1>
                </div>
                <div class="col-md-6">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
                    </form>
                </div>
                
                @if (Auth::check())
                <div class="col-md-3 text-end">
                    <b>{{ Auth::user()->fullname }}</b>
                    <a href="{{ route('logout') }}" class="btn btn-primary me-2">Logout</a>
                   <a href="{{ route('client.index') }}"><i class="bi bi-person-circle"> you </i></a> 

                </div>
                @else
                <div class="col-md-3 text-end">
                    <a href="{{ route('login')}}" class="btn btn-primary me-2"> Đăng nhập</a>
                    <a href="{{route('register')}}" class="btn btn-outline-secondary">Đăng ký</a>
                </div>
                @endif
            </div>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>