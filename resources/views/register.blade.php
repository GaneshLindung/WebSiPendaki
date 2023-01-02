<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
                <h2>Buat Akun</h2>
                <p>Mari bergabung bersama sahabat Si Pendaki</p>
                @if (session()->has('notification'))
                <span class="notification success">
                    {!! session('notification') !!}
                </span>
                @endif
                <form action="{{ url('register') }}" method="post">
                    <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <input type="password" name="password" id="password" placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="submit" value="Register">
                </form>
                <p>Already have an account? <span><a href="/login">Log in</></span></p>
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