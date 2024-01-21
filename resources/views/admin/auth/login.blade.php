<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unique Group|Administrative Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('back_assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('back_assets/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back_assets/css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('back_assets/css/custom.css') }}">
</head>

<h1 style="margin-bottom: 50px; color:#25245e"><strong style="border-bottom: 3px solid #25245e;">Unique Group</strong></h1>
<body class="hold-transition login-page">
    <div class="login-box">
        @include('message')
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h3"><strong>Administrative Panel</strong></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Login to start your session</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    {{-- <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div> --}}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="User Name" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" style="border-radius: 25px">Login</button>
                        </div>
                    </div>
                    {{-- <p class="text-center">If don't have account | <a href="{{ route('register') }}">Register</a></p> --}}
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('back_assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('back_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('back_assets/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('back_assets/js/demo.js') }}"></script>
</body>

</html>
