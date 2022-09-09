<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="XUrLkVMmPS6fvuTTcBrdNJ9Y1i4aaBaSjZUVl97L">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primexglobalfinance | Primexglobalfinance</title>

    <link rel="icon" href="https://ftfinancetraders.com/cloud/app/images/fxfav.png"
          type="image/png" />


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100i,200,300,400,700,800,900" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('temp/assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- owl-carousel CSS -->

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('temp/assets/css/custom.css') }}">

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('temp/assets/bootstrap/js/bootstrap.min.js') }}"></script>


</head>

<body class="d-flex flex-column h-100 auth-page">
<!-- ======= Loginup Section ======= -->
<br>
<section class="auth">
    <div class="container">
        <div class="row justify-content-center user-auth">
            <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                <div class="text-center mb-4">
                    <a href="{{ route('index') }}" >
                        <h3 style="color: white; font-weight: bolder">Primexglobalfinance</h3>
                    </a>

                </div>

                <div class="card ">
                    <h1 class="text-center mt-3"> User Login</h1>
                    <form method="POST" action="{{ route('login') }}" class="mt-5 card__form">
                        @csrf
                        <div class="form-group ">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name ="email" value="" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary mt-4" type="submit">Login</button>
                        </div>

                        <div class="text-center mb-3">
                            <small class=" text-center mb-2"> Forgot your password?
                                @if (Route::has('password.request'))
                                    <a class="link ml-1" href="{{ route('password.request') }}">
                                        {{ __('Reset') }}
                                    </a>
                                @endif
{{--                                <a href="password/reset.html" class="link ml-1">Reset.</a>--}}
                            </small>
                            <small class=" text-center">Dont have an Account yet? <a href="register" class="link ml-1">Sign up.</a> </small>
                        </div>
                        <div class="text-center">
                            <hr>
                            <small class=" text-center">&copy; Copyright  2022 &nbsp; Primexglobalfinance &nbsp; All Rights Reserved.</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
</body>

<!-- Mirrored from www.Primexglobalfinances.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 04:25:19 GMT -->
</html>
