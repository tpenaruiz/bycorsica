@foreach($data as $r)
	<div class="col-md-3 col-xs-6 product-grille">
		<div class="image">
			<a href=""><img src="{{ asset($r->cheminMedia) }}" alt="{{$r->libelleMedia}}" title="{{$r->libelleMedia}}"></a>
		</div>
		<div class="description">
			<h3 class="title">{{$r->nom}}</h3>
			<div class="libelle">{{$r->descriptionProd}}</div>
			<div class="price" style="">{{Lang::get('general.price')}} {{$r->prix}} &euro;</div>
			<div>
				<a href="" class="product-link">{{Lang::get('general.detail')}}</a>
				<a href="" class="cart" data-toggle="modal" data-target="#add_produc_cart_{{$r->idProd}}">{{Lang::get('general.addBasket')}}</a>
			</div>

			@if(Auth::user() !== NULL)
                {!! Form::open(['route'=>['searchPost.addProductForSurprise', ':PRODUCT_ID'], 'method' => 'POST', 'id' => 'form-add-surprise']) !!}
                <div class="text-right" data-id="{{$r->idProd}}">
                    <a href="#" class="btn_surpise_grille_category">{{Lang::get('general.addListCadeaux')}}</a>
                </div>
                {!! Form::close() !!}
            @endif
		</div>
	</div>

	<!-- Modal Ajouter au panier-->
	<div class="modal fade product-grille-modal" id="add_produc_cart_{{$r->idProd}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">{{Lang::get('general.addArticBasket')}}</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1"><img src="{{ asset($r->cheminMedia) }}" class="img-responsive" alt="{{$r->libelleMedia}}" title="{{$r->libelleMedia}}"></div>
						<div class="col-md-8 col-sm-8 col-xs-8"><h4>{{$r->nom}} - {{Lang::get('general.price')}} {{$r->prix}} &euro;</h4></div>
					</div>
				</div>
				<div class="modal-footer">
					{!! Form::open(['route'=>['searchPost.addBasketInRedirectHome', $r->idProd]]) !!}
					<button type="submit" style="float: right;" class="btn btn-default" value="{{$r->idProd}}">{{Lang::get('general.continueAchat')}}</button>
					{!! Form::close() !!}

					{!! Form::open(['route'=>['searchPost.addBasketInRedirectBasket', $r->idProd]]) !!}
					<button type="submit" style="float: left;" class="btn btn-primary" value="{{$r->idProd}}">{{Lang::get('general.commander')}}</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endforeach