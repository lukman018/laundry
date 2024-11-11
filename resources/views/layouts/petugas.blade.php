<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/css/petugas.css',  'resources/js/petugas.js'])
</head>
<body class="body-pd">
    <header class="header" id="header">

    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">BBBootstrap</span>
                </a>
                <div class="nav_list">

                    <!--Dashboard-->
                    <a href="{{route('petugas.index')}}" class="nav_link">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Home</span>
                    </a>

                    <!--users-->
                    <a href="{{route('petugas.konsumen.index')}}" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Data Konsumen</span>
                    </a>

                    <!--bebas-->
                    <a href="#" class="nav_link">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Messages</span>
                    </a>

                    <!--bebas-->
                    <a href="#" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">Bookmark</span>
                    </a>

                    <!--bebas-->
                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Files</span>
                    </a>

                    <!--bebas-->
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Stats</span>
                    </a>
                </div>

            </div>

            <!--logout-->
            @if (Auth::check())
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">Sign Out</span>
            </a>    
            @endif

        </nav>
    </div>
</body>
</html>
