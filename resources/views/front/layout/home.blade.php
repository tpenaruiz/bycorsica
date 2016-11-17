<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{\Config::get('constante.nom_code')}} | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="{{ asset('lib/html5shiv.min.js') }}"></script>
        <script src="{{ asset('lib/respond.min.js') }}"></script>
        <![endif]-->

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">
        <!-- SmartMenus core CSS (required) -->
        <link rel="stylesheet" href="{{ asset('lib/smartMenus/css/sm-core-css.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/smartMenus/css/sm-blue/sm-blue.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/smartMenus/css/smartmenus.css') }}">
        <!-- Main -->
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">


    <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css') }}">
    </head>
    <body>
        <!-- Header Haut -->
        <header>
            @include('front.layout.header')
        </header>

        <!-- Content Wrapper. Contains page content -->
        <div>
            @yield('content')
        </div>

        <footer>
            @include('front.layout.footer')
        </footer>

        <!-- jQuery 2.1.3 -->
        <script src="{{ asset('lib/jquery.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- SmartMenus -->
        <script src="{{ asset('lib/smartMenus/js/jquery.smartmenus.min.js') }}"></script>
        <script src="{{ asset('lib/smartMenus/js/smartmenus.js') }}"></script>
    </body>
</html>