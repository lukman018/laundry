<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

 <div  class="">
     <!-- Header -->
    <header class="bg-primary text-white p-3">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mb-0">Lucky Store</h1>
                <nav>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('produk.index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('admin.pembayaran.index')}}">Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('admin.petugas.index')}}">Data Petugas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('admin.konsumen.index')}}">Data Konsumen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('produk.about')}}">About</a>
                        </li>
                        @if(Auth::check()) <!-- Memeriksa apakah pengguna sudah login -->
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="#" class="nav-link text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!--buat komponen pesan-->

    <!--template java-->
        @yield('content')

 </div>
</body>
</html>
