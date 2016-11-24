@extends('front.layout.home')
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
                                <td class="image">Produit</td>
                                <td class="description">Description</td>
                                <td class="">Prix</td>
                                <td class="quantity">Quantity</td>
                                <td class="total">Total</td>
                                <td><span><i class="fa fa-trash-o fa-lg"></i></span></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img
                                                src="http://bycorsica.fr/324-tm_small_default/tapenade-noire-olives-noires-apero.jpg"
                                                alt=""></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="">TAPENADE NOIRE</a></h4><div class="break"></div>
                                    <p class="refPr">Référence : BC_AP_0002</p>
                                </td>
                                <td class="cart_price">
                                    <p>$59</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_down"> - </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="1"
                                               autocomplete="off" size="2">
                                        <a class="cart_quantity_up"> + </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p>$59</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img
                                                src="http://bycorsica.fr/324-tm_small_default/tapenade-noire-olives-noires-apero.jpg"
                                                alt=""></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="">TAPENADE NOIRE</a></h4><div class="break"></div>
                                    <p class="refPr">Référence : BC_AP_0002</p>
                                </td>
                                <td class="cart_price">
                                    <p>$59</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_down"> - </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="1"
                                               autocomplete="off" size="2">
                                        <a class="cart_quantity_up"> + </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p>$59</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
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

                    <div class="col-md-12 col-sm-12">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="submit" class="btn btn-primary btn-block pull-right"
                                   value="Continuer mes Achats"/>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="submit" class="btn btn-primary btn-block" value="Commander"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop