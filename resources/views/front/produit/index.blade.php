@extends('front.layout.home')
@section('content')
    <!-- Main -->
    <link rel="stylesheet" href="{{ asset('front/css/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/produit.css') }}">

    <!-- Breadcrumbs -->
    <div class="container breadcrumbs_content">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a class="lien_breadcrumbs" href="#"><span class="fa fa-home fa-lg"></span></a></li>
                <li><a class="lien_breadcrumbs" href="#">Epicerie Fine</a></li>
                <li><a class="lien_breadcrumbs" href="#">Produit Apéritifs et térrines</a></li>
                <li><a class="lien_breadcrumbs selected" href="#">Tapenade Noire</a></li>
            </ul>
        </div>
    </div>

    <div class="container content">
        <div class="row">
            <div class="margeContent">
                <hr>







                <div class="container">
                    <div class="card">
                        <div class="container-fliud">
                            <div class="wrapper row">
                                <div class="preview col-md-4">

                                    <div class="preview-pic tab-content">
                                        <div class="tab-pane active" id="pic-1"><img class="image_produit" src="http://bycorsica.fr/324-tm_thickbox_default/tapenade-noire-olives-noires-apero.jpg" /></div>
                                    </div>
                                    <ul class="preview-thumbnail nav nav-tabs">
                                    </ul>
                                </div>
                                <div class="details col-md-4">
                                    <h3 class="product-title">Tapenade Noire</h3>
                                    <p class="product-description">
                                        Toute la méditerranée concentrée dans un pot !!
                                        Notre tapenade aux saveurs incomparables enchantera vos apéritifs.
                                    </p>
                                    <h5 class="social">
                                        <span class="social" title="twitter"><a class="icon_twitter" href="#"><img class="icon_twitter_img" src="http://bycorsica.fr/modules/socialsharing/img/png/Twitter.png" alt="Twitter"></a></span>
                                        <span class="social" title="facebook"><a class="icon_facebook" href="#"><img class="icon_facebook_img" src="http://bycorsica.fr/modules/socialsharing/img/png/Facebook.png" alt="Facebook"></a></span>
                                        <span class="social" title="google_plus"><a class="icon_google_plus" href="#"><img class="icon_google_plus_img" src="http://bycorsica.fr/modules/socialsharing/img/png/GooglePlus.png" alt="Google Plus"></a></span>
                                        <span class="social" title="pinterest"><a class="icon_pinterest" href=""><img class="icon_pinterest_img" src="http://bycorsica.fr/modules/socialsharing/img/png/Pinterest.png" alt="Pinterest"></a></span>
                                    </h5>

                                    <div class="social">
                                        <h5><span class="fa fa-envelope-o fa-lg"></span>Envoyer à un ami</h5>
                                        <h5><span class="fa fa-print fa-lg"></span>Imprimer</h5>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="bloc">
                                        <div class="price">
                                            4,43$
                                        </div>

                                        <div class="qte">
                                            <h3>Quantité</h3>
                                            <div class="nbr">
                                                <input type="number">
                                                <button class="del">-</button>
                                                <button class="add">+</button>
                                            </div>
                                        </div>

                                        <div class="add_panier">
                                            Ajouter au panier
                                        </div>

                                        <div class="ceur">
                                            Ajouter à ma liste de cadeaux
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </div>


@stop