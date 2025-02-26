<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ruhama-Information</title>
    <link rel="stylesheet" href="{{ asset('font/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <main>
        <div class="main-container">
            <div class="logo">
                <a href="/ex">
                    <img src="{{ asset('uhamka.png') }}" alt="">
                </a>
            </div>
            <div class="navbar-item">
                <div class="nav-link">
                    <a href="">
                        <i class="fas fa-home"></i> Home
                    </a>
                </div>
                <div class="nav-link">
                    <a href="">
                        <i class="fas fa-school"></i> School
                    </a>
                </div>
                <div class="nav-link">
                    <a href="">
                        <i class="fas fa-book"></i> Home work
                    </a>
                </div>
                <div class="nav-link">
                    <a href="">
                        <i class="fas fa-user"></i> Profile
                    </a>
                </div>
            </div>
            <div class="out-button">
                <button>Keluar</button>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div> 
    </main>   

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>