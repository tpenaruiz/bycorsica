@if(count($populaire) > 0)
    @foreach($populaire as $row)
        <div class="col-md-3 col-xs-6 product-grille">
            <div class="image">
                <a href=""><img src="{{ asset($row->chemin) }}" alt="{{$row->libelle}}" title="{{$row->libelle}}"></a>
            </div>
            <div class="description">
                <h3 class="title">{{$row->nom}}</h3>
                <div class="libelle">{{$row->description}}</div>
                <div class="price" style="">{{Lang::get('general.price')}} {{$row->prix}} &euro;</div>
                <div>
                    <a href="" class="product-link">{{Lang::get('general.detail')}}</a>
                    <a href="" class="cart" data-toggle="modal" data-target="#add_produc_cart_{{$row->id_produit}}">{{Lang::get('general.addBasket')}}</a>
                </div>
            </div>
        </div>

        <!-- Modal Ajouter au panier-->
        <div class="modal fade product-grille-modal" id="add_produc_cart_{{$row->id_produit}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">{{Lang::get('general.addArticBasket')}}</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1"><img src="{{ asset($row->chemin) }}" class="img-responsive" alt="{{$row->libelle}}" title="{{$row->libelle}}"></div>
                            <div class="col-md-8 col-sm-8 col-xs-8"><h4>{{$row->nom}} - {{Lang::get('general.price')}} {{$row->prix}} &euro;</h4></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {!! Form::open(['route'=>['searchPost.addBasketInRedirectHome', $row->id_produit]]) !!}
                        <button type="submit" style="float: right;" class="btn btn-default" value="{{$row->id_produit}}">{{Lang::get('general.continueAchat')}}</button>
                        {!! Form::close() !!}

                        {!! Form::open(['route'=>['searchPost.addBasketInRedirectBasket', $row->id_produit]]) !!}
                        <button type="submit" style="float: left;" class="btn btn-primary" value="{{$row->id_produit}}">{{Lang::get('general.commander')}}</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p>{{\Lang::get('general.aucune_ventePopulaire')}}</p>
@endif
