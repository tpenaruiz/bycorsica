@foreach($searchEngine as $row)
	<div class="row product-liste">
		<table class="table">
			<tbody>
				<tr>
					<td class="col-xs-2">
						<div class="image"><a href=""><img src="{{ asset($row->medias->chemin) }}" alt="{{$row->medias->libelle}}" title="{{$row->medias->libelle}}"></a></div>
					</td>
					<td class="col-xs-5 left">
						<h3 class="title">{{$row->nom}}</h3>
						<div class="description">{{$row->description}}</div>
						<div class="link"><a href="" class="product-link">Détails</a></div>
					</td>
					<td class="col-xs-5 right">
						<h4 class="price">{{Lang::get('general.price')}} {{$row->prix}} &euro;</h4>
						<div class="cart"><a href="" data-toggle="modal" data-target="#add_produc_cart_liste"><i class="fa fa-shopping-cart fa-lg"></i>{{Lang::get('general.addBasket')}}</a></div>
						<div class="gift"><a href=""><i class="fa fa-heart-o fa-lg"></i>{{Lang::get('general.addListCadeaux')}}</a></div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- Modal Ajouter au panier-->
	<div class="modal fade product-liste-modal" id="add_produc_cart_liste" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">{{Lang::get('general.addArticBasket')}}</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1"><img src="{{ asset($row->medias->chemin) }}" alt="{{$row->medias->libelle}}" title="{{$row->medias->libelle}}" class="img-responsive"></div>
						<div class="col-md-8 col-sm-8 col-xs-8"><h4>{{$row->nom}} - {{Lang::get('general.price')}} {{$row->prix}} &euro;</h4></div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">{{Lang::get('general.continueAchat')}}</button>
					<button type="button" class="btn btn-primary">{{Lang::get('general.commander')}}</button>
				</div>
			</div>
		</div>
	</div>
@endforeach