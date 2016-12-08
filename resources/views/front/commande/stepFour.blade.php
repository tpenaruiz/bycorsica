@extends('front.layout.default')
@section('content')
    <div class="container">
        @include('front.blocks.breadcrumbs')

        <div class="row commandeStepFour-heading">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                    <li>
                        <a href="">
                            <h4 class="list-group-item-heading">Etape 1</h4>
                            <p class="list-group-item-text">Connection</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <h4 class="list-group-item-heading">Etapes 2</h4>
                            <p class="list-group-item-text">Adresse</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <h4 class="list-group-item-heading">Etapes 3</h4>
                            <p class="list-group-item-text">Livraison</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="">
                            <h4 class="list-group-item-heading">Etapes 4</h4>
                            <p class="list-group-item-text">Paiement</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row commandeStepFour-content">
            <div class="col-md-12">
                <p class="libelle">Selectionnez un mode de paiement</p>
            </div>
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="table-responsive cart_info2">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="description">Total produit TTC</td>
                                <td class="description">Frait de port</td>
                                <td class="description">Total TTC</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cart_product">
                                    <p>4,43$</p>
                                </td>
                                <td class="cart_price">
                                    <p>8,98$</p>
                                </td>
                                <td class="cart_total">
                                    <p>13,41$</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>            

            {!! Form::open(['method' => 'post', 'url' => route('home')]) !!}
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="row mode-paiement">
                    <div class="col-md-6 col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body" style="">
                                <span class="check">{!! Form::radio('mode-paiement', '0', true) !!}</span>
                                <span class="image"><img class="responsive" src="http://bycorsica.fr/modules/etransactions/img/CB.png" alt="" title=""></span>
                                <span class="cb"><label>Payer par Carte Bleue</label></span>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body" style="">
                                <span class="check">{!! Form::radio('mode-paiement', '0', true) !!}</span>
                                <span class="image"><img class="responsive" src="http://bycorsica.fr/modules/etransactions/img/CB.png" alt="" title=""></span>
                                <span class="cb"><label>Payer par Carte Bleue</label></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body" style="">
                                <span class="check">{!! Form::radio('mode-paiement', '0', true) !!}</span>
                                <span class="image"><img class="responsive" src="http://bycorsica.fr/modules/etransactions/img/CB.png" alt="" title=""></span>
                                <span class="cb"><label>Payer par Carte Bleue</label></span>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body" style="">
                                <span class="check">{!! Form::radio('mode-paiement', '0', true) !!}</span>
                                <span class="image"><img class="responsive" src="http://bycorsica.fr/modules/etransactions/img/CB.png" alt="" title=""></span>
                                <span class="cb"><label>Payer par Carte Bleue</label></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                {!! Form::submit('Regler votre commande', ['class' => 'btn btn-primary btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop