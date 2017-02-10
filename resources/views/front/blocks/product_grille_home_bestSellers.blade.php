@if(count($bestSellers) > 0)
    @foreach($bestSellers as $row)
        <div class="col-md-3 col-xs-6 product-grille">
            <div class="image">
                <a href=""><img src="{{ asset($row->chemin) }}" alt="{{$row->libelle}}" title="{{$row->libelle}}"></a>
            </div>
            <div class="description">
                <h3 class="title">{{$row->nom}}</h3>
                <div class="libelle">{{$row->description}}</div>
                <div class="price" style="">{{Lang::get('general.price')}} {{$row->prixttc}} &euro;</div>
                <div>
                    <a href="" class="product-link">{{Lang::get('general.detail')}}</a>
                    <a href="" class="cart" data-toggle="modal" data-target="#add_produc_cart_bestSellers_{{$row->idProd}}">{{Lang::get('general.addBasket')}}</a>
                </div>

                 @if(Auth::user() !== NULL)
                    {!! Form::open(['route'=>['searchPost.addProductForSurprise', ':PRODUCT_ID'], 'method' => 'POST', 'id' => 'form-add-surprise-grille-home']) !!}
                    <div class="text-right" data-id="{{$row->idProd}}">
                        <a href="#" class="btn_surpise_grille_home">{{Lang::get('general.addListCadeaux')}}</a>
                    </div>
                    {!! Form::close() !!}
                @endif
            </div>
        </div>

        <!-- Modal Ajouter au panier-->
        <div class="modal fade product-grille-modal" id="add_produc_cart_bestSellers_{{$row->idProd}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">{{Lang::get('general.addArticBasket')}}</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1"><img src="{{ asset($row->chemin) }}" class="img-responsive" alt="{{$row->libelle}}" title="{{$row->libelle}}"></div>
                            <div class="col-md-8 col-sm-8 col-xs-8"><h4>{{$row->nom}} - {{Lang::get('general.price')}} {{$row->prixttc}} &euro;</h4></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {!! Form::open(['route'=>['searchPost.addBasketInRedirectHome', $row->idProd]]) !!}
                        <button type="submit" style="float: right;" class="btn btn-default" value="{{$row->idProd}}">{{Lang::get('general.continueAchat')}}</button>
                        {!! Form::close() !!}

                        {!! Form::open(['route'=>['searchPost.addBasketInRedirectBasket', $row->idProd]]) !!}
                        <button type="submit" style="float: left;" class="btn btn-primary" value="{{$row->idProd}}">{{Lang::get('general.commander')}}</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p>{{\Lang::get('general.aucune_meilleuresVentes')}}</p>
@endif
