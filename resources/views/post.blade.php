<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Si Pendaki | {{ $posts->nama }}</title>
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
    <nav class="navbar navbar-expand-lg" style="background-color: #126e82;">
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <h1>{{ $posts->nama }}</h1>
                <hr>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="imgContainer">
                <img src="/img/{{ $posts->gambarUtama }}" class="img-fluid rounded" alt="Responsive image">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 mt-3">
                <h3>{{ $posts->nama }}</h3>
                <p>{{ $posts->detail }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Rute</h2>
                        <p class="card-text">
                            <iframe width="100%" height="500px" frameborder="0" allowfullscreen
                                src="{{ $posts->rute }}"></iframe>
                        <p><a href="{{ $posts->linkrute }}">See full screen</a></p>

                        <a href="/pdf/{{ $posts->pdfrute }}" class="btn btn-primary btn-lg" role="button"
                            download>Download
                            PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Status</h2>
                        <p>{{ $posts->status }}</p>
                    </div>
                    <div class="col-md-6">
                        <h2>Harga masuk</h2>
                        <p>{{ $posts->harga }}</p>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h2>Informasi Tambahan</h2>
                        <p>{{ $posts->infodetail }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h2>Narahubung</h2>
                <div class="row">
                    <div class="col-md-12 mx-2 mb-3">
                        <h5>BaseCamp</h5>
                        <a href="https://wa.me/{{ $posts->contactBasecamp }}?text=" target="_blank"
                            class="text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> +{{ $posts->contactBasecamp }}</a>
                    </div>
                    <div class="col-md-12 mx-2 mb-3">
                        <h5>Porter</h5>
                        <a href="https://wa.me/{{ $posts->contactPorter }}?text=" target="_blank"
                            class="text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> +{{ $posts->contactPorter }}</a>
                    </div>
                    <div class="col-md-12 mx-2 mb-3">
                        <h5>TourGuide</h5>
                        <a href="https://wa.me/{{ $posts->contactTourGuide }}?text=" target="_blank"
                            class="text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> +{{ $posts->contactTourGuide }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-4">
            <div class="col-md-4">
                <h2>Spot Foto</h2>
                <img src="/img/{{ $posts->spotfoto1 }}" alt="nature" class="img-fluid rounded">
            </div>
            <div class="col-md-4">
                <h2>Spot Foto</h2>
                <img src="/img/{{ $posts->spotfoto2 }}" alt="nature" class="img-fluid rounded">
            </div>
            <div class="col-md-4">
                <h2>Spot Foto</h2>
                <img src="/img/{{ $posts->spotfoto3 }}" alt="nature" class="img-fluid rounded">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
