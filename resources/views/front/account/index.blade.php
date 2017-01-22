@extends('front.layout.default')

@section('content')


<script src="{{ asset('front/ajax/account/address_delete.js') }}"></script>
<script src="{{ asset('front/ajax/account/liste_cadeaux.js') }}"></script>


<div class="container">
	@include('front.blocks.breadcrumbs')

	<div class="row account">
		<div class="col-md-12 title">
			<h3 class="text-center">Gestion de mon compte</h3>	
		</div>
	  	<!-- Nav tabs -->
	  	<ul class="nav nav-tabs" role="tablist">			
	    	<li role="presentation" class="active"><a href="#infos" aria-controls="infos" role="tab" data-toggle="tab">Mes Infos</a></li>
	    	<li role="presentation"><a href="#address" aria-controls="profile" role="tab" data-toggle="tab">Adresses</a></li>
	    	<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Commandes</a></li>
	    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Avoirs</a></li>
	    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Bon de réducation</a></li>
	    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Retour Produits</a></li>
	    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Mes Listes</a></li>
	    	<li role="presentation"><a href="#listCadeaux" aria-controls="listCadeaux" role="tab" data-toggle="tab">Mes Listes de cadeaux</a></li>
	  	</ul>

	  	<!-- Tab panes -->
	  	<div class="tab-content">
	  		<!-- Debut Panel Info -->
	    	<div role="tabpanel" class="tab-pane infos active" id="infos">
	    		{!! Form::open(['method' => 'post','id' => 'account_infos', 'url' => route('account.infos.update')]) !!}
					<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
						<div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }} col-md-12 col-sm-12">
				        	{!! Form::label('firstname', 'Prénom *') !!}
				        	{!! Form::text('firstname', $user->prenom, ['class' => 'form-control input-sm', 'placeholder' => 'nom', 'required' => 'required']) !!}
				        
				        	@if ($errors->has('firstname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                            @endif
				        </div>

						<div class="form-group {{ $errors->has('secondname') ? ' has-error' : '' }} col-md-12 col-sm-12">
							{!! Form::label('secondname', 'Nom *') !!}
							{!! Form::text('secondname', $user->nom, ['class' => 'form-control input-sm', 'placeholder' => 'prénom', 'required' => 'required']) !!}
				        
							@if ($errors->has('secondname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('secondname') }}</strong>
                                </span>
                            @endif
				        </div>
				        
				        <div class="form-group {{ $errors->has('birthday') ? ' has-error' : '' }} col-md-12 col-sm-12">
				        	{!! Form::label('birthday', 'Date de naissance *') !!}
				        	{!! Form::text('birthday', $user->getBirthdayAttribute(), ['class' => 'form-control input-sm', 'required' => 'required']) !!}
				        
				        	@if ($errors->has('birthday'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('birthday') }}</strong>
                                </span>
                            @endif
				        </div>

				        <div class="form-group col-md-12 {{ $errors->has('email') ? ' has-error' : '' }} col-sm-12">
				        	{!! Form::label('email', 'Adresse Email *') !!}
				        	{!! Form::email('email', $user->email, ['class' => 'form-control input-sm', 'placeholder' => 'email', 'required' => 'required']) !!}
				        
				        	@if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
				        </div>
				 		
				        <div class="form-group col-md-12 col-sm-12">						  	
					  		<div class="checkbox">
					    		<label for="newsletter">
					    			{!! Form::checkbox('newsletter', '1', true) !!}
					      			S'inscrire à la newsletter
					    		</label>
							</div>
						</div>
						<div class="form-group col-md-12 col-sm-12">						  	
					  		<div class="checkbox">
					    		<label for="offers">
					    			{!! Form::checkbox('offers', '1', true) !!}
					      			Recevez les offres spéciales de nos partenaires
					    		</label>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="form-group col-md-offset-3 col-md-3 col-sm-offset-3 col-sm-3 col-xs-6" >
							{!! Form::submit('Annuler', ['class' => 'btn btn-primary btn-block']) !!}
						</div>
						<div class="form-group col-md-3 col-sm-3 col-xs-6" >
							{!! Form::submit('Valider', ['class' => 'btn btn-primary btn-block']) !!}
						</div>
					</div>
				{!! Form::close() !!}
	    	</div>
	    	<!-- Fin Panesl Info -->

	    	<!-- Debut Panel Adresse -->
	    	<div role="tabpanel" class="tab-pane address" id="address">
	    		<div class="col-md-12 libelle">
	    			<p>{{ \Lang::get('general.addressLibelle') }}</p>
	    		</div>

	    		@if (count($adresses)==0)
	    		<div class="col-md-12 firstaddress">
	    			<p>Veuillez ajouter une <a href="{{ url('account/address/create') }}">première adresse</a></p>
	    		</div>
	    		@endif

    			@foreach ($adresses as $ad)
    			<div id="adress_details_{{ $ad->id }}" class="adress_details col-md-4  col-sm-6 address-details" data-id="{{ $ad->id }}">
    				<div class="bloc">
	    				<h5 class="libelle">{{ $ad->libelle }}</h5>
	    				<div class="bloc-details">
	    					<div class="name">{{ \Lang::get('general.name') }} : {{ $ad->prenom }} {{ $ad->nom }} </div>
		    				<div class="addres">{{ \Lang::get('general.address') }} : {{ $ad->adresse }}</div>
		    				<div class="adress2">{{ \Lang::get('general.address2') }} : {{$ad->adresse_suppl !== NULL || !empty($ad->adresse_suppl) ? $ad->adresse_suppl : 'Non renseigné' }} </div>
		    				<div class="cpville">{{ \Lang::get('general.cpcity') }} : {{ $ad->villes->code_postal }} {{ $ad->villes->libelle }}</div>
		    				<div class="country">{{ \Lang::get('general.country') }} : {{ $ad->pays->nom_fr_fr }}</div>
		    				<div class="phone">{{ \Lang::get('general.phone') }} : @if (isset($ad->telephone)) {{ $ad->telephone }} @else  Non renseigné @endif</div>
		    				<div class="phone2">{{ \Lang::get('general.phone2') }} : @if (isset($ad->telephone2) && !empty($ad->telephone2)) {{ $ad->telephone2 }} @else  Non renseigné @endif</div>
		    				<div class="infosupp">{{ \Lang::get('general.infosupp') }} : @if (isset($ad->complement) && !empty($ad->complement)) {{ $ad->complement }} @else Non renseigné @endif</div>

	    				</div>
	    				<div class="bloc-btn">
	    					<div class="row">
	    						<div class="form-group col-xs-5 col-xs-offset-1">
									<a href="{{ url('account/address/update/'.$ad->id) }}" class="btn btn-success btn-block">
                                        <i class="fa fa-refresh fa-lg" aria-hidden="true"></i> &nbsp Update
                                    </a>
	    						</div>
	    						<div class="form-group col-xs-5">
	    							{!! Form::open(['method' => 'DEL', 'id'=>'form_address_destroy', 'route'=>['account.address.destroy', ':ID']]) !!}
	    								<a href="#" class="btn_remove btn btn-danger btn-block">
	                                        <i class="fa fa-trash" aria-hidden="true"></i> &nbsp Delete
	                                    </a>
	    							{!! Form::close() !!}
	    						</div>
    						</div>
    					</div>
	    			</div>
    			</div>
	    		@endforeach

	    		@if (count($adresses)>0)
    			<div class="col-md-12 col-sm-12 address-new">
					<a href="{{ url('account/address/create') }}" class="btn btn-primary .btn-block">
                        {{ \Lang::get('general.addressCreate') }}
                    </a>
	    		</div>
	    		@endif
	    	</div>

			<!-- Fin Panel Addresse -->
			<div role="tabpanel" class="tab-pane" id="messages">...</div>
			<div role="tabpanel" class="tab-pane" id="settings">...</div>

			<!-- Debut Panel Liste Cadeaux -->
			<div role="tabpanel" class="tab-pane listCadeaux" id="listCadeaux">
				<div class="col-md-12 libelle">
					<p>{{ \Lang::get('general.maListeDeCadeaux') }}</p>
				</div>

				@if(count($listCadeaux) === 0)
					<div class="col-md-12 firstaddress">
						<p>{{\Lang::get('general.emptyListCadeaux')}}</p>
					</div>
				@endif

				@foreach($listCadeaux as $row)
					<div id="list_cadeaux_detail{{ $row->ProductForSurpriseId }}" class="list_cadeaux_detail col-md-3 col-xs-6 product-grille" data-id="{{ $row->ProductForSurpriseId }}">
						<div class="bloc">
							<div class="image">
								<a href=""><img src="{{asset($row->chemin) }}" alt="{{$row->libelle}}" title="{{$row->libelle}}"></a> <!-- TODO Une fois que la page Produit/Le produit sera finalisé, on mettra à jour le lien ci présent pour rediriger directement sur le détail du produit en question !! -->
							</div>
							<div class="description">
								<h3 class="title">{{$row->produitNom}}</h3>
								<div class="libelle">{{$row->produitDescription}}</div>
								<div class="price" style="">{{Lang::get('general.price')}} {{str_replace('.',',',$row->prix + ($row->prix * $row->valeur)/100)}} &euro;</div>
								<div>
									{!! Form::open(['method' => 'DEL', 'id'=>'form_list_cadeaux_destroy', 'route'=>['account.list_cadeaux.destroy', ':ID']]) !!}
									<a href="#" class="btn_remove_liste_cadeaux btn btn-danger btn-block">
										<i class="fa fa-trash" aria-hidden="true"></i> &nbsp Delete
									</a>
									{!! Form::close() !!}
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
	  	</div>
	</div>
</div>

@stop