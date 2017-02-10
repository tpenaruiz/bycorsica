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
                                <div class="tab-pane active" id="pic-1"><img class="image_product" src="{{ asset($produit->chemin) }}" alt="{{$produit->nom}}" title="{{$produit->nom}}" />
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
                            <h3 class="product-title">{{ $produit->nom }}</h3>
                            <div class="rating">
                                <p>{{ $produit->description }}</p>
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
                                <h3 class="price" data-price="{{$produit->prixttc}}"><span>{{ str_replace('.', ',', $produit->prixttc) }}</span></h3>

                                <div class="qte">
                                    {{--Form::open(['method' => 'post', 'url' => route('produit.store', 1)])--}}
                                    {!! Form::text('qte', '1', array('class'=>'_inputQte', 'name'=>'qte', 'placeholder' => '1')) !!}
                                    <button id="del_qte" class="del_qte"> -</button>
                                    <button id="add_qte" class="add_qte"> +</button>
                                    {{--Form::close()--}}
                                </div>
                                <div class="panier">
                                    <a href="" class="ajax_panier" data-toggle="modal" data-target="#add_produc_cart_{{$produit->id}}"><span><i class="fa fa-shopping-cart fa-lg"></i>{{Lang::get('general.addBasket')}}</span></a>
                                </div>
                                @if(Auth::user() !== NULL)
                                    {!! Form::open(['route'=>['searchPost.addProductForSurprise', $produit->id], 'method' => 'POST', 'id' => 'form-add-gift']) !!}
                                        <div class="cadeau">
                                            <a href="" class="ajax_cadeau" id="add_gift"><span><i class="fa fa-heart-o fa-lg"></i>Ajouter à ma liste de cadeaux</span></a>
                                        </div>
                                {!! Form::close() !!}
                                @endif
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

 <!-- Modal Ajouter au panier-->
<div class="modal fade product-grille-modal" id="add_produc_cart_{{$produit->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">{{Lang::get('general.addArticBasket')}}</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1"><img src="{{ asset($produit->chemin) }}" class="img-responsive" alt="{{$produit->nom}}" title="{{$produit->nom}}" /></div>
                    <div class="col-md-8 col-sm-8 col-xs-8"><h4>{{$produit->nom}} - {{Lang::get('general.price')}} {{$produit->prixttc}} &euro;</h4></div>
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::open(['route'=>['searchPost.addBasketInRedirectHome', $produit->id]]) !!}
                    {!! Form::hidden('modal_qte', 1, ['id' => 'modal_qte_redirectHome'])!!}
                    <button type="submit" style="float: right;" class="btn btn-default" value="{{$produit->id}}">{{Lang::get('general.continueAchat')}}</button>
                {!! Form::close() !!}

                {!! Form::open(['route'=>['searchPost.addBasketInRedirectBasket', $produit->id]]) !!}
                    {!! Form::hidden('modal_qte', 1, ['id' => 'modal_qte_redirectBasket'])!!}
                    <button type="submit" style="float: left;" class="btn btn-primary" value="{{$produit->id}}">{{Lang::get('general.commander')}}</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop