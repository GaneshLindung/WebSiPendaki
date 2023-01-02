<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
    <!-- partial:index.partial.html -->

    <head>
        <script src="https://kit.fontawesome.com/a65c474152.js" crossorigin="anonymous"></script>
    </head>

    <div class="decor1 pos1"></div>
    <div class="decor1 pos2"></div>
    <div class="decor1 pos3"></div>

    <div class="grid">

        <div class="column-one">
            <h2>Halo Selamat Datang di Si Pendaki</h2>
            <p>Sahabat terbaik dalam pendakian mu</p>
        </div>

        <div class="container">
            <div class="signup-form">
                <h2>Masuk Akun</h2>
                <p>Masuk ke akun Si Pendaki mu</p>
                <form action="{{ url('login') }}" method="post">
                    <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <input type="password" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <input type="submit" value="Log in">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>
                <p>Or</p>
                <div class="socials">
                    <i class="fab fa-facebook-f social-icon"></i>
                    <a href="{{ route('google.login') }}" class="btn"><i class="fab fa-google social-icon"></i></a>
                    <i class="fab fa-twitter social-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->

</body>

</html>