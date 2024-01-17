<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unique Group</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('back_assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('back_assets/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ asset('back_assets/css/custom.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        @include('admin.layouts.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content')
            <!-- /.content -->

            <div class="modal fade" id="passwordChange" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Change Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('password.change') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <label for="">Old Password</label>
                                <input type="password" name="old_password" class="form-control mb-1"
                                    placeholder="Enter Old Password">
                                <label for="">New Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter New password">
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-sm btn-hover" style="color:#fff; background-color: #D80032; border-radius: 10px;">Reset</button>
                                <button type="submit" class="btn btn-sm btn-hover" style="color:#fff; background-color: #008f07; border-radius: 10px;">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <strong>Copyright &copy; {{date('Y')}} @Unique Group. All rights reserved.
    </footer>

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

    @stack('admin-js')
</body>

</html>
