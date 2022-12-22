<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Si Pendaki</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <a class="nav-link">Hi {{ auth()->user()->name }}</a>
                        @else
                            <a class="nav-link" href="/register" style="color: #fff;">Register</a>
                        @endauth
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #fff;">Daftar Gunung</a>
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
        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="img/G.Rinjani.jpg" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5">Gunung Rinjani</h3>
                        <p class="fs-6 text-white">Gunung Rinjani (3726 m) yang mendominasi dengan sebagian besar
                            wilayahnya yang mengesankan di seluruh bagian utara Lombok, adalah gunung berapi tertinggi
                            kedua di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="img/G.Bromo.jpg" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5">Gunung Bromo</h3>
                        <p class="fs-6 text-white">Gunung berapi yang masih aktif yang berada di kawasan Taman Nasional
                            Bromo Tengger Semeru. Gunung ini memiliki ketinggian 2.329 mdpl.Bentuk gunung ini ini unik
                            karena terdiri dari lembah dan ngarai</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="img/G.JayaWijaya.jpg" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5">Gunung Jaya Wijaya</h3>
                        <p class="fs-6 text-white">Gunung yang berada di Papua memiliki nama lain yaitu Piramida
                            Carstensz. Memiliki tinggi sekitar 4.884 mdpl, tidak heran jika gunung ini dikelilingi oleh
                            gletser Carstensz yang merupakan satu – satunya gletser di iklim tropis, seperti di
                            Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="cari-temen">
        <div class="card text-center teman">
            <div class="card-header teman-head">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">Pendaki</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title">Mau naik gunung tapi enggak ada temen?</h5>
                <p class="card-text">Si Pendaki menghadirkan solusi untuk join trip bersama, Dakbar yuuk!</p>
            </div>
        </div>
    </section>

    <!-- Ini Bagian Testimoni -->
    <section class="home-testimonial">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center testimonial-pos">
                <div class="col-md-12 d-flex justify-content-center">
                    <h2>Apa Kata Mereka?</h2>
                </div>
            </div>
            <section class="home-testimonial-bottom">
                <div class="container testimonial-inner">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">&ldquo;Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum..&rdquo;</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                            src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg"
                                            alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">&ldquo;Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum..&rdquo;</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                            src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                            alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">&ldquo;Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum..&rdquo;</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                            src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                            alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    </section>


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
                <p>+62 812 2992 9129</p>
            </div>
            <div>
                <i class="fa fa-mail"></i>
                <p><a href="#">support@gmail.com</a></p>
            </div>
        </div>

        </div>
        <div class="footer-right">
            <p class="follow">
                <span>Follow us</span>
            </p>
            <div class="media">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
