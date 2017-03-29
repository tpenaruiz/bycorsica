<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Gestion du Site E-Commerce </title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="{{ asset('plugins/DataTables-1.10.13/media/css/dataTables.bootstrap.min.css') }}">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap-social.css') }}">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap-select.css') }}">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="{{ asset('admin/css/fileinput.min.css') }}">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/awesome-bootstrap-checkbox.css') }}">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


<div>
    @include('admin.layout.error')
    @include('admin.layout.errors_request')
    @include('admin.layout.success')
    <div id="message_info"></div>
</div>

<!-- Header Haut -->
<div class="brand clearfix">
    @include('admin.layout.header')
</div>

<!-- Left side column. contains the logo and sidebar -->
<div class="ts-main-content">
    <nav class="ts-sidebar">
        @include('admin.layout.sidebar')
    </nav>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>

    <footer class="main-footer">
        @include('admin.layout.footer')
    </footer>
</div>

<!-- Loading Scripts -->
<script src="{{ asset('lib/jQuery2.1.3.min.js') }}"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/DataTables-1.10.13/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/DataTables-1.10.13/media/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/fileinput.js') }}"></script>
<script src="{{ asset('admin/js/chartData.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>

<!-- Fonction chart dashboard -->
<script src="{{ asset('admin/js/fonctionChart.js') }}"></script>

</body>
</html>