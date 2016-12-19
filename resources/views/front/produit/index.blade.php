@extends('front.layout.default')
@section('content')

<div class="container">
    <!-- Breadcrumbs -->
    @include('front.blocks.breadcrumbs')
    <div class="row produit">
        <div class="panel">
            <div class="panel-body">
                <div class="card">
                    <div class="wrapper">
                        <div class="preview col-md-3">
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1"><img class="image_product" src="http://bycorsica.fr/324-tm_thickbox_default/tapenade-noire-olives-noires-apero.jpg"/>
                                </div>
                            </div>
                            <br>
                            <div class="lien_utils">
                                <div class="sendFriend">
                                    <a class="ajax_sendFriend"><span><i class="fa fa-envelope-o fa-lg"></i>Envoyer à un amis</span></a>
                                </div>

                                <div class="print">
                                    <a class="ajax_print"><span><i class="fa fa-print fa-lg"></i>Imprimer</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="details col-md-5">
                            <h3 class="product-title">Tapenade Noire</h3>
                            <div class="rating">
                                <p>Toute la méditerranée concentrée dans un pot !!
                                    Notre tapenade aux saveurs incomparables enchantera vos apéritifs.</p>
                            </div>
                            <ul class="social">
                                <li class="icon_facebook"><a href="#"> <i class="fa fa-facebook"> </i> </a></li>
                                <li class="icon_twitter"><a href="#"> <i class="fa fa-twitter"> </i> </a></li>
                                <li class="icon_googlePlus"><a href="#"> <i class="fa fa-google-plus"> </i> </a></li>
                                <li class="icon_pinterest"><a href="#"> <i class="fa fa-pinterest"> </i> </a></li>
                                <li class="icon_youtube"><a href="#"> <i class="fa fa-youtube"> </i> </a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="bloc">
                                <h3 class="price"><span>$180</span></h3>

                                <div class="qte">
                                    {{--Form::open(['method' => 'post', 'url' => route('produit.store', 1)])--}}
                                    {!! Form::number('qte', '1', array('class'=>'_inputQte', 'name'=>'qte', 'placeholder' => '1')) !!}
                                    <button id="del_qte" class="del_qte"> -</button>
                                    <button id="add_qte" class="add_qte"> +</button>
                                    {{--Form::close()--}}
                                </div>
                                <div class="panier">
                                    <a class="ajax_panier"><span><i class="fa fa-shopping-cart fa-lg"></i>Ajouter au panier</span></a>
                                </div>
                                <div class="cadeau">
                                    <a class="ajax_cadeau"><span><i class="fa fa-heart-o fa-lg"></i>Ajouter à ma liste de cadeaux</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bigTitle">
                            <h4 class="title_bloc">EN SAVOIR PLUS</h4>
                        </div>
                        <p class="product_text">
                            Produit méditerranéen par excellence notre tapenade sera parfaite pour
                            accompagner vos apéritifs
                            Dégustée sur canapé ou simplement en la tartinant sur du pain .
                            Mais cette tapenade peut aussi servir de farce pour la volaille. On la retrouve
                            dans de nombreuses recettes de l ile
                            Fabriqué en corse cette tapenade gorgé de soleil ravira les amateurs de tapas
                            accompagnés de vin rosé corse
                        </p>

                        <div class="bigTitle">
                            <h4 class="title_bloc">IDÉES RECETTES</h4>
                        </div>
                        <p class="product_text">
                            Nos idées Recettes !!
                        </p>

                        <div class="bigTitle">
                            <h4 class="title_bloc">ACCOMPAGNER AVEC</h4>
                        </div>
                        <p class="product_text">
                            Orenga de Gaffory rosé, coppa corse, Cap corse
                        </p>

                        <div class="bigTitle">
                            <h4 class="title_bloc">LES CLIENTS QUI ONT ACHETÉ CE PRODUIT ONT ÉGALEMENT
                                ACHETÉ...</h4>
                        </div>

                        <!-- Tab panes -->
                        <div class="productSpaceLab tab-content home-product-content">

                            <div role="tabpanel" class="tab-pane active" id="popular">
                                @include('front.blocks.product_grille_home')
                            </div>

                            <div role="tabpanel" class="tab-pane active" id="popular">
                                <div role="tabpanel" class="tab-pane active" id="popular">
                                    @include('front.blocks.product_grille_home')
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane active" id="popular">
                                <div role="tabpanel" class="tab-pane active" id="popular">
                                    @include('front.blocks.product_grille_home')
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane active" id="popular">
                                <div role="tabpanel" class="tab-pane active" id="popular">
                                    @include('front.blocks.product_grille_home')
                                </div>
                            </div>
                        </div>


                        <div class="bigTitle">
                            <h4 class="title_bloc">4 AUTRES PRODUITS DANS LA MÊME CATÉGORIE :</h4>
                        </div>

                        <!-- Tab panes -->
                        <div class="productSpaceLab tab-content home-product-content">

                            <div role="tabpanel" class="tab-pane active" id="popular">
                                <div role="tabpanel" class="tab-pane active" id="popular">
                                    @include('front.blocks.product_grille_home')
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane active" id="popular">
                                <div role="tabpanel" class="tab-pane active" id="popular">
                                    @include('front.blocks.product_grille_home')
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane active" id="popular">
                                <div role="tabpanel" class="tab-pane active" id="popular">
                                    @include('front.blocks.product_grille_home')
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane active" id="popular">
                                <div role="tabpanel" class="tab-pane active" id="popular">
                                    @include('front.blocks.product_grille_home')
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