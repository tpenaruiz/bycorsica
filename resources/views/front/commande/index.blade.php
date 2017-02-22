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
                        <div class="col-md-6 col-sm-12">
                            <div class="table-responsive commande_infos">
                                <table class="table table-condensed text-center">
                                    <thead>
                                        <tr>
                                            <td>Date</td>
                                            <td>Montant</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td id="cmd_date">
                                                <p>{{$commande->getCreateddateAttribute()}}</p>
                                            </td>
                                            <td class="cmd_montant">
                                                <p>{{$commande->montant}} $</p>
                                            </td>
                                            <td class="cmd_total">
                                                <p>{{$commande->status}}</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="table-responsive commande_adresse">
                                <table class="table table-condensed text-center">
                                    <thead>
                                        <tr>
                                            <td class="description">Adresse de livraison</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td id="cart_product_total" class="cart_product">
                                                <p>{{$commande->getCreateddateAttribute()}}</p>
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
                                    <td class="col-sm-2 text-center image">Produit</td>
                                    <td class="col-sm-5 text-center description">Libelllé</td>
                                    <td class="col-sm-5 text-center quantity">Quantity</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($commande->produits as $row)
                                <tr>                                 
                                    <td class="text-center cmd_product">
                                        <a href="{{url('produit/'.$row->id)}}"><img style="width:100%" src="{{asset($row->medias->chemin)}}" alt="{{$row->nom}}" title="{{$row->nom}}" /></a>
                                    </td>
                                    <td class="text-center cmd_description">
                                        <h4><a href="">{{$row->nom}}</a></h4><div class="break"></div>
                                        <p class="refPr">Référence : {{$row->reference}}</p>
                                    </td>
                                    <td class="text-center cmd_quantity">
                                        <p>X {{$row->pivot->quantite}}</p>
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