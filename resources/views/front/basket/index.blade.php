@extends('front.layout.default')
@section('content')

    <div class="container">
        @include('front.blocks.breadcrumbs')

        <div class="row basket">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Votre panier</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12 table-responsive cart_info1">
                        <table class="table table-condensed">
                            <thead>
                                <tr class="cart_menu">
                                    <td class="col-sm-1 text-center image">Produit</td>
                                    <td class="col-sm-3 text-center description">Description</td>
                                    <td class="col-sm-2 text-center">Prix</td>
                                    <td class="col-sm-2 text-center quantity">Quantity</td>
                                    <td class="col-sm-2 text-center total">Total</td>
                                    <td class="col-sm-2 text-center"><span><i class="fa fa-trash-o fa-lg"></i></span></td>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($myPurchase)>0)
                                    @foreach($myPurchase as $row)
                                    <tr id="purchase" class="cart_{{$row->idPurchase}}" data-idpurchase="{{$row->idPurchase}}">                                 
                                        <td class="text-center cart_product">
                                            <a href="{{url('produit/'.$row->idProd)}}"><img src="{{asset($row->chemin)}}"></a>
                                        </td>
                                        <td class="text-center cart_description">
                                            <h4><a href="">{{$row->produitNom}}</a></h4><div class="break"></div>
                                            <p class="refPr">Référence : {{$row->reference}}</p>
                                        </td>
                                        <td id="cart_price_{{$row->idPurchase}}" class="text-center cart_price">
                                            <p>{{$row->produitPrixTtc}}</p>
                                        </td>
                                        {!! Form::open(['route'=>['myPurchase.quantiteUpdate', ':PURCHASE_ID'], 'method' => 'POST', 'id' => 'form-cart-quantite-update-'.$row->idPurchase]) !!}
                                            <td id="cart_quantity_{{$row->idPurchase}}" class="text-center cart_quantity">
                                                <div class="cart_quantity_button">
                                                    <a class="cart_quantity_down"> - </a>
                                                    <input id="cart_quantity_input_{{$row->idPurchase}}" class="cart_quantity_input" type="text" name="quantity" value="{{$row->quantite}}" autocomplete="off" size="2">
                                                    <a class="cart_quantity_up"> + </a>
                                                </div>
                                            </td>
                                        {!! Form::close() !!}
                                        <td id="cart_total_{{$row->idPurchase}}" class="text-center cart_total">
                                            <p>{{$row->prixProduitTotalTtc}}</p>
                                        </td>
                                        {!! Form::open(['route'=>['myPurchase.destroy', ':PURCHASE_ID'], 'method' => 'DEL', 'id' => 'form-cart-delete']) !!}
                                            <td class="text-center cart_delete">
                                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                            </td>
                                        {!! Form::close() !!}                                  
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center no_product">Aucun produit actuellement dans votre panier</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <div class="code_promo col-md-6 col-sm-12">
                        <form>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="secondname">Avez-vous un code promo ? </label>
                                <input type="text" class="form-control input-sm" id="Basket_codePromo"
                                       placeholder="Votre code promo" onkeyUp="inputPromoKeyPress()">
                            </div>

                            <div class="">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3">
                                    <input type="submit" class="btn btn-primary btn-block promoBtn"
                                           value="Je valide mon code promo"/>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
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
                                    <td id="cart_product_total" class="cart_product">
                                        <p>{{$myPurchasePriceTTC->prixtotalttc}} $</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>0 $</p>
                                    </td>
                                    <td class="cart_total">
                                        <p>0 $</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="submit" class="btn btn-primary btn-block pull-right"
                                   value="Continuer mes Achats"/>
                        </div>
                        @if(count($myPurchase) !== 0)
                            <div class="btn_commander form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="submit" class="btn btn-primary btn-block" value="Commander"/>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop