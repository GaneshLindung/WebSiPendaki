<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Si Pendaki</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
    <!-- Ini Bagian Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""
                    style="width: 5pc; height: 5pc;">
                <a class="nav-link" aria-current="page" href="#" style="color: #fff;">Si Pendaki</a></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        @auth
                            <a class="nav-link" style="color: #fff;">Hi {{ auth()->user()->name }}</a>
                        @else
                            <a class="nav-link" href="/register" style="color: #fff;">Register</a>
                        @endauth
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gunung" style="color: #fff;">Informasi Gunung</a>
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
            @if ($loop->index < 3)
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
            @endif
        @endforeach

    </div>

    <!-- Ini Bagian Testimoni -->
    <div class="home-testimonial">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center testimonial-pos">
                <div class="col-md-12 d-flex justify-content-center">
                    <h2>Apa Kata Mereka?</h2>
                </div>
            </div>
            <div class="home-testimonial-bottom">
                <div class="container-fluid testimonial-inner">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center"> Naik gunung itu bukan soal
                                        fisik atau instastory tapi soal edukasi, edukasi dalam naik gunung itu lebih
                                        penting daripada fisik dan mental karena hutan atau gunung itu bersikap
                                        sesuai apa sikap kita jadi.</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                            src="img/ganes.jpg" alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Ganesh Lindung</div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">Sebelum mendaki cari informasi
                                        seputar gunung yang mau di daki, selengakap mungkin sebagi antisipasi supaya
                                        hal-hal yang tidak di ingiinkan tidak terjadi. Salah satu sumber yang
                                        membantu web ini, Si Pendaki.</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                            src="img/ayas.jpeg" alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Muhammad Ayyas</div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">Gunung itu punya keunikan
                                        tersendiri, sayapun tidak tau itu apa akan tetapi
                                        sesuatu itu yang menarik saya untuk menginjakkan kaki di
                                        wilayah yang saya pun gatau kemana akan pergi</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                            src="img/arafah.jpg" alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Arafah Rianti</div>
                                    <div class="link-position d-flex justify-content-center">Selebriti</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="footer-left">
            <img src="img/logo.png" alt="" style="width: 50% ;">
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Indonesia</span>Jawa Barat, Purwakarta</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p><a href="https://wa.me/+62895605200802" target="_blank">+62 8956 0520 0802</a></p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">sipendaki@mail.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="follow">
                <span>Terhubung Dengan Kami</span>
            </p>
            <div class="media">
                <a class="facebook-icons" href="https://www.facebook.com/sahabatmendakimu" target="_blank"><i
                        class="fa fa-facebook"></i></a>
                <a class="whatsapp-icons" href="https://wa.me/+62895605200802" target="_blank"><i
                        class="fa fa-whatsapp"></i></a>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
