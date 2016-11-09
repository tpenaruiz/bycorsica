<style>
    .imgH{
        margin-left: 80px;
    }
</style>


<!-- Logo -->
<a href="{{route('administration')}}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>{{\Config::get('constante.nom_code_miniature')}}</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>{{\Config::get('constante.nom_code')}}</b></span>
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>


    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">7</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 7 notifications</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-warning text-yellow"></i> La notification, L'auteur
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                </ul>
            </li>


            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    {{-- HTML::image($gravatar, 'avatar', array('class' => 'user-image img-responsive', 'alt'=>'user avatar')) --}}
                    {{-- HTML::image(Auth::user()->avatar, 'avatar', array('class' => 'user-image img-responsive', 'alt'=>'User avatar')) --}}
                    <span class="hidden-xs">Nom Prénom</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        {{-- HTML::image($gravatar_two, 'avatar', array('class' => 'img-circle img-responsive imgH', 'alt'=>'user avatar')) --}}
                        {{-- HTML::image(Auth::user()->avatar, 'avatar', array('class' => 'img-circle img-responsive imgH', 'alt'=>'User avatar')) --}}
                        <p>
                            Nom Prénom
                            <small>Membre depuis le date fr</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
    </div>

</nav>
