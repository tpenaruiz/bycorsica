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
            <form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recherchez un produit ...">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span>
                </div><!-- /input-group -->
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mon Compte <span class="caret"></span></a>
                    <ul class="dropdown-menu" id="login-dp">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <label>Connexion :</label> -->
                                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                            <div class="help-block text-right"><a href="">Mot de passe oublié ?</a></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block" >Se connecter</button>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox"> Se souvenir de moi</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="bottom text-center">
                                    <a href="#">Créer votre compte</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- TODO PROVISOIR -->
                <!-- Panier au survol faire apparaitre une tooltip inspiré de la plupart des site web -->
                <li><a href="" id="basket">Panier <span class="badge">O</span></a></li>

                <div class="tooltip_basket">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <tbody>
                                <tr>
                                    <td class="image"><a href=""><img src="http://bycorsica.fr/364-tm_cart_default/lonzo-lonzu.jpg" alt="" title=""></a></td>
                                    <td>
                                        <div>Tapenade Noir</div>
                                        <div>3,50 Euros</div>
                                    </td>
                                    <td><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td class="image"><a href=""><img src="http://bycorsica.fr/364-tm_cart_default/lonzo-lonzu.jpg" alt="" title=""></a></td>
                                    <td>
                                        <div>Tapenade Noir</div>
                                        <div>3,50 Euros</div>
                                    </td>
                                    <td><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <td class="image"><a href=""><img src="http://bycorsica.fr/364-tm_cart_default/lonzo-lonzu.jpg" alt="" title=""></a></td>
                                    <td>
                                        <div>Tapenade Noir</div>
                                        <div>3,50 Euros</div>
                                    </td>
                                    <td><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="tooltip_basket_footer" style="text-align: center;">Livraison : 5,40 euros</div>
                        <div class="tooltip_basket_footer" style="text-align: center;">Total : 10,20 euros</div>
                        <div class="tooltip_basket_footer" style="text-align: center;"><button class="btn btn-primary" type="submit">Commander</button></div>
                    </div>
                </div>
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