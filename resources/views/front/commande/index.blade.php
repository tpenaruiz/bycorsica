@extends('front.layout.default')
@section('content')

    <div class="container">
        @include('front.blocks.breadcrumbs')

        <div class="row commande">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Commande : référence n°{{$commande->reference}}</h3>
                </div>
                <div class="panel-body">
                    <div class="raw">
                        <div class="col-md-6 col-sm-12 col-md-offset-3">
                            <div class="table-responsive commande_infos">
                                <table class="table table-condensed text-center">
                                    <thead>
                                        <tr>
                                            <td class="description">Date</td>
                                            <td class="description">Montant</td>
                                            <td class="description">Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td id="cart_product_total" class="cart_product">
                                                <p>{{$commande->getCreateddateAttribute()}}</p>
                                            </td>
                                            <td class="cart_price">
                                                <p>{{$commande->montant}} $</p>
                                            </td>
                                            <td class="cart_total">
                                                <p>{{$commande->status}}</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 table-responsive produits_infos">
                        <table class="table table-condensed">
                            <thead>
                                <tr class="cart_menu">
                                    <td class="image">Produit</td>
                                    <td class="description">Libelllé</td>
                                    <td class="quantity">Quantity</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($commande->produits as $row)
                                <tr>                                 
                                    <td class="cmd_product">
                                        <a href="{{url('produit/'.$row->id)}}"><img src="{{asset($row->medias->chemin)}}" alt="{{$row->nom}}" title="{{$row->nom}}" /></a>
                                    </td>
                                    <td class="cmd_description">
                                        <h4><a href="">{{$row->nom}}</a></h4><div class="break"></div>
                                        <p class="refPr">Référence : {{$row->reference}}</p>
                                    </td>
                                    <td class="cmd_quantity">
                                        <p>X </p>
                                    </td>                               
                                </tr>
                                @endforeach   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop