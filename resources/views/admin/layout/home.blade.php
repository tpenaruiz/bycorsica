<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{\Config::get('constante.nom_code')}} | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.3.0/dist/css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/sweetalert/dist/sweetalert.css') }}">

        <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css"/>

        <!-- jQuery 2.1.3 -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/plugins/jQuery/jQuery2.1.3.min.js') }}"></script>
        <!-- jQueryUI 1.11.4 -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/plugins/jQueryUI/jQueryUi1.11.4.min.js') }}"></script>
        <!-- Sweet Alert -->
        <script src="{{ asset('lib/sweetalert/dist/sweetalert.min.js') }}"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- Header Haut -->
            <header class="main-header">
                @include('admin.layout.header')
            </header>

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                @include('admin.layout.sidebar')
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
                @include('admin.layout.settings')
            </div>

            <footer class="main-footer">
                @include('admin.layout.footer')
            </footer>
        </div>

        <!-- Bootstrap 3.3.5 -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('lib/html5shiv.min.js') }}"></script>
        <script src="{{ asset('lib/respond.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/plugins/fastclick/fastclick.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/dist/js/app.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
        <!-- jvectormap -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('lib/AdminLTE-2.3.0/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/plugins/chartjs/Chart.min.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/dist/js/pages/dashboard2.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/dist/js/demo.js') }}"></script>
        <!-- Notification JS -->
        <script src="{{ asset('plugins/notificationJs/notie.js') }}" type="text/javascript"></script>
    </body>
</html>
