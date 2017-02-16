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
        <![endif]-->

        <!-- jQuery 2.1.3 -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/plugins/jQuery/jQuery2.1.3.min.js') }}"></script>
        <!-- jQueryUI 1.11.4 -->
        <script src="{{ asset('lib/AdminLTE-2.3.0/plugins/jQueryUI/jQueryUi1.11.4.min.js') }}"></script>
        <script src="{{ asset('lib/sweetalert/dist/sweetalert.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('lib/html5shiv.min.js') }}"></script>
        <script src="{{ asset('lib/respond.min.js') }}"></script>

        <!-- Class Ajax, on retrouve toutes les méthodes ajax uniquement -->
        <script src="{{asset('front/js/ajax.js')}}"></script>

        <!-- Function JS Personnel -->
        <script src="{{asset('front/js/function.js')}}"></script>

        <!-- .Validate JS -->
        <script src="{{ asset('lib/jquery.js') }}"></script>
        <script src="{{ asset('plugins/jquery-validation-1.15.0/dist/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-validation-1.15.0/dist/additional-methods.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-validation-1.15.0/dist/localization/messages_fr.min.js') }}"></script>
        <script src="{{ asset('front/js/validateForm.js') }}"></script>

        <!-- SmartMenus -->
        <script src="{{ asset('lib/smartMenus/js/jquery.smartmenus.min.js') }}"></script>
        <script src="{{ asset('lib/smartMenus/js/smartmenus.js') }}"></script>

        <!-- Jquery UI 1.12.1 -->
        <script src="{{ asset('lib/jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>



        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">

        <!-- SmartMenus core CSS (required) -->
        <link rel="stylesheet" href="{{ asset('lib/smartMenus/css/sm-core-css.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/smartMenus/css/sm-blue/sm-blue.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/smartMenus/css/smartmenus.css') }}">

        <!-- Notification Jaredreich Notie.js -->
        <link rel="stylesheet" href="{{ asset('plugins/notificationJs/notie.css') }}">

        <!-- Main -->
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

        <link rel="stylesheet" href="{{ asset('lib/AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css') }}">

        <!-- Jquery UI 1.12.1 -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!-- Jquery DataTables-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('plugins/DataTables-1.10.13/media/css/dataTables.bootstrap.min.css') }}">
        <script type="text/javascript" src="{{ asset('plugins/DataTables-1.10.13/media/js/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/DataTables-1.10.13/media/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('front/js/jqueryDatatables.js') }}"></script>
    </head>
    <body>
        <div>
            @include('front.layout.authentification_request_message')
            @include('front.layout.error')
            @include('front.layout.errors_request')
            @include('front.layout.success')
            <div id="message_info"></div>
        </div>

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
    </body>
</html>
