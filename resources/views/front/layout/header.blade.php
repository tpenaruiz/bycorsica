<nav class="navbar navbar-inverse navbar-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">By Corsica</a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-truck" aria-hidden="true"></i> Livraison <span class="sr-only">(current)</span></a></li>
                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Contactez-nous</a></li>
            </ul>
            {!! Form::open(['method' => 'post', 'url' => route('searchPost.searchEngine'), 'class' => 'navbar-form navbar-left']) !!}
                <div class="input-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Recherchez un produit ...">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span>
                </div><!-- /input-group -->
            {!! Form::close() !!}
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    @if(Auth::check())
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="login-connect">Mon Compte <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                    @else
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="login-deconnect">Mon Compte <span class="caret"></span></a>
                    <ul class="dropdown-menu" id="login-dp">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::open(['role' => 'form', 'class'=> 'form', 'id' => 'login_nav', 'method' => 'post',  'url' => '/login']) !!}    
                                        {{ csrf_field() }}

                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            {!! Form::label('email', 'Email address', ['class' => 'sr-only']) !!}
                                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email addresse', 'required' => 'required']) !!}                                   
                                        
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                            {!! Form::label('password', 'Password', ['class' => 'sr-only']) !!}
                                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) !!}
                                    
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block text-right"><a href="{{ url('/password/reset') }}">Mot de passe oublié ?</a></div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::submit('Se connecter', ['class' => 'btn btn-primary btn-block']) !!}
                                        </div>
                                        <div class="checkbox">
                                            <label for="newsletter">
                                                {!! Form::checkbox('remember', '1', true) !!}
                                                Se souvenir de moi
                                            </label>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                                <div class="bottom text-center">
                                    <a href="{{ url('/register') }}">Créer votre compte</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @endif
                </li>

                <!-- Panier au survol faire apparaitre une tooltip -->
                <li id="icoPanierAjax"><a href="">{{Lang::get('general.basket')}}<span class="badge">{{count($myPurchase)}}</span></a></li>

                @if(count($myPurchase) > 0)
                    <div class="toolt_basket">
                        <div class="tooltip_basket">
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <tbody>
                                        @foreach($myPurchase as $row)
                                            <tr class="purchaseLinter_{{$row->idPurchase}}" data-id="{{$row->idPurchase}}">
                                                <td class="image"><a href=""><img src="{{ asset($row->chemin) }}" alt="{{$row->mediaLibelle}}" title="{{$row->mediaLibelle}}"></a></td>
                                                <td>
                                                    <div>{{$row->nom}}</div>
                                                    <div>{{$row->prix}} &euro;</div>
                                                </td>
                                                {!! Form::open(['route'=>['myPurchase.destroy', ':PURCHASE_ID'], 'method' => 'DEL', 'id' => 'form-del']) !!}
                                                    <td>
                                                        <a href="#" class="btn_del">
                                                            <i class="delete_purchase fa fa-trash-o fa-2x" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                {!! Form::close() !!}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-3 text-center">
            <img src="{{ asset('front/img/logo_big.jpeg') }}" style="width: 200px">
        </div>
        <div class="col-md-9">
            <nav class="main-nav" role="navigation">
                <!-- Mobile menu toggle button (hamburger/x icon) -->
                <input id="main-menu-state" type="checkbox" />
                <label class="main-menu-btn" for="main-menu-state">
                    <span class="main-menu-btn-icon"></span> Toggle main menu visibility
                </label>

                <!-- <h2 class="nav-brand"><a href="#">Brand</a></h2> -->

                <!-- Sample menu definition -->
                <ul id="main-menu" class="sm sm-blue">
                    <li class="has-mega-menu"><a href="#">CAVE</a>
                        <ul class="mega-menu">
                            <li>
                                <div class="column-1-3 text-center">
                                    <span>VINS</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/vins.jpeg') }}"></div>
                                    <ul>
                                        <li><a href="#">Rouge</a></li>
                                        <li><a href="#">Rosé</a></li>
                                        <li><a href="#">Blanc</a></li>
                                        <li><a href="#">Muscat</a></li>
                                    </ul>
                                </div>
                                <div class="column-1-3 text-center">
                                    <span>SPIRITUEUX ET LIQUEURS</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/spiritueux.jpeg') }}"></div>
                                </div>
                                 <div class="column-1-3 text-center">
                                    <span>BIÈRES</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/bieres.jpeg') }}"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="has-mega-menu"><a href="http://www.smartmenus.org/download/">CHARCUTERIE & FROMAGES</a>
                        <ul class="mega-menu">
                            <li>
                                <div class="column-1-3 text-center">
                                    <span>LES FROMAGES</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/fromages.jpeg') }}"></div>
                                </div>
                                <div class="column-1-3 text-center">
                                    <span>LA CHARCUTERIE</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/charcuterie.jpeg') }}"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="has-mega-menu"><a href="http://www.smartmenus.org/download/">EPICERIE FINE</a>
                        <ul class="mega-menu">
                            <li>
                                <div class="column-1-3 text-center">
                                    <span>PRODUITS APÉRITIFS & TERRINES</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/terrines.jpeg') }}"></div>
                                     <ul>
                                        <li><a href="#">Terrines</a></li>
                                        <li><a href="#">Sauce et Tapas</a></li>
                                    </ul>
                                </div>
                                <div class="column-1-3 text-center">
                                    <span>MIELS & CONFITURES</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/confiture.jpeg') }}"></div>
                                </div>
                                <div class="column-1-3 text-center">
                                    <span>BISCUITS & GATEAUX</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/gateaux.jpeg') }}"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="has-mega-menu"><a href="http://www.smartmenus.org/download/">SOINS DE BEAUTÉ</a>
                        <ul class="mega-menu">
                            <li>
                                <div class="column-1-3 text-center">
                                    <span>HUILES ESSENTIELLES</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/huiles_essentielles.jpeg') }}">></div>
                                </div>
                                <div class="column-1-3 text-center">
                                    <span>EAUX FLORALES</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/eaux_florales.jpeg') }}"></div>
                                </div>
                                <div class="column-1-3 text-center">
                                    <span>PRODUITS DE SOIN</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/produits_soins.jpeg') }}"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="has-mega-menu"><a href="http://www.smartmenus.org/download/">L'ART D'OFFRIR</a>
                        <ul class="mega-menu">
                            <li>
                                <div class="column-1-3 text-center">
                                    <span>LES FROMAGES</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/fromages.jpeg') }}"></div>
                                </div>
                                <div class="column-1-3 text-center">
                                    <span>LA CHARCUTERIE</span>
                                    <div class="mega-menu-sample-image"><img src="{{ asset('front/img/charcuterie.jpeg') }}"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>