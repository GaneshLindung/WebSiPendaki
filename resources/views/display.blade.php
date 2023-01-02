<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Si Pendaki | {{ $judul }}</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
    <!-- Ini Bagian Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" style="color: #fff;">Si Pendaki</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        @auth
                            <a class="nav-link" style="color: #fff;">Hi {{ auth()->user()->name }}</a>
                        @else
                            <a class="nav-link active" aria-current="page" href="/register" style="color: #fff;">Buat
                                akun</a>
                        @endauth


                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/gunung" style="color: #fff;">Informasi Gunung</a>
                    </li>
                    @auth
                        <li>
                            <a class="btn btn-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Keluar
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Ini Bagian Container 1 -->
    <div class="container" style="padding-top: 50px">
        <h1 style="text-align: center;">Explore Gunung Indonesia</h1>
        <p style="text-align: center">Sahabat Pendaki Indonesia</p>
    </div>
    <!-- Ini Bagian Tab Pencarian -->
    <div class="container">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control" placeholder="Mau mendaki kemana?">
                    <button class="btn btn-primary" style="top:5px; right:5px">Cari</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Ini Bagian Cards -->
    <div class="container d-flex align-items-center justify-content-center flex-wrap" style="padding-top: 50px">

        @foreach ($posts as $gunung)
            <a href="/gunung/{{ $gunung->slug }}">
                <div class="box">
                    <div class="body">
                        <div class="imgContainer">
                            <img src="img/{{ $gunung->gambarUtama }}" alt="">
                        </div>
                        <div class="content d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <h3 class="text-white fs-5">{{ $gunung->nama }}</h3>
                                <p class="fs-6 text-white">{{ $gunung->detail }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
