<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <title>{{ config('app.name') }}</title>
    
    <!-- CSS Files -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('backend/css/light-bootstrap-dashboard.css?v=2.0.1') }} " rel="stylesheet">

</head>

<body>
    <div class="wrapper">
       @include('backend/layouts.sidebar')

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid">
                    <a class="navbar-brand" href="#pablo"> Absensi </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                </div>
            </nav>
            <!-- End Navbar -->
            
            
            @yield('content')
                
            <footer class="footer">
                <div class="container">
                    <nav>
                        <p class="copyright text-center">
                            &copy; 2021 <a href="#">E-Absensi</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="{{ asset('backend/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/js/core/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('backend/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('backend/js/plugins/bootstrap-notify.js') }}"></script>
<!-- SweetAlert -->
<script src="{{ asset('backend/js/plugins/sweetalert.min.js') }}"></script>

<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('backend/js/plugins/light-bootstrap-dashboard.js?v=2.0.1') }}" type="text/javascript"></script>

<!-- Main Js -->
<script src="{{ asset('backend/js/main.js') }}"></script>

</html>