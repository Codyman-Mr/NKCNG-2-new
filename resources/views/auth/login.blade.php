<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <style>
        .login-box {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #aaa;
        }
        .login-box .logo img {
            display: block;
            margin: 0 auto 20px;
        }
        .login-box .create-account {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body class="gray-bg">
    <div class="login-box animated fadeInDown">
        <div class="logo">
            <img src="{{ asset('/img/logo.png') }}" width="120" height="120" alt="Logo">
        </div>

        <form role="form" action="/login" method="POST">
            @csrf

            <div class="form-group">
                <label for="phone_number" class="sr-only">Phone Number</label>
                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" autocomplete="off">
                @error('phone_number')
                    <p style="color:red; font-size:0.9rem; margin-top:5px;">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="sr-only">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{ old('password') }}" autocomplete="off">
                @error('password')
                    <p style="color:red; font-size:0.9rem; margin-top:5px;">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block">Login</button>

            <div class="create-account">
                Don't have an account? <a href="/registration">Create Account</a>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
