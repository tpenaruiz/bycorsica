@extends('front.layout.default')

@section('content')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script type="text/javascript">
	$( function() {
	    $( "#birthday" ).datepicker({
	      changeMonth: true,
	      changeYear: true
	    });
  } );
</script>

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
	  	</ul>

	  	<!-- Tab panes -->
	  	<div class="tab-content">
	  		<!-- Debut Panel Info -->
	    	<div role="tabpanel" class="tab-pane infos active" id="infos">
	    		{!! Form::open(['method' => 'post']) !!}
					<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
						<div class="form-group col-md-12 col-sm-12">
							{!! Form::label('secondname', 'Prénom *') !!}
							{!! Form::text('secondname', $user->nom, ['class' => 'form-control input-sm', 'placeholder' => 'prénom', 'required' => 'required']) !!}
				        </div>
				        <div class="form-group col-md-12 col-sm-12">
				        	{!! Form::label('firstname', 'Nom *') !!}
				        	{!! Form::text('firstname', $user->prenom, ['class' => 'form-control input-sm', 'placeholder' => 'nom', 'required' => 'required']) !!}
				        </div>

				        <div class="form-group col-md-12 col-sm-12">
				        	{!! Form::label('birthday', 'Date de naissance *') !!}
				        	{!! Form::text('birthday', $user->date_naissance, ['class' => 'form-control input-sm', 'required' => 'required']) !!}
				        </div>

				        <div class="form-group col-md-12 col-sm-12">
				        	{!! Form::label('email', 'Adresse Email *') !!}
				        	{!! Form::email('email', $user->email, ['class' => 'form-control input-sm', 'placeholder' => 'email', 'required' => 'required']) !!}
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
	    			<p>Choisissez vos adresses de facturation. Ces dernières seront présélectionnées lors de vos commandes. Vous pouvez également ajouter d'autres adresses, ce qui est particulièrement intéressant pour envoyer des cadeaux ou recevoir votre commande au bureau.</p>
	    		</div>

	    		<div class="col-md-12 firstaddress">
	    			<p>Veuillez ajouter une <a href="" data-toggle="modal" data-target="#modal-address-new">première adresse</a></p>
	    		</div>
   		
    			@foreach ($adresses as $ad)
    			<div class="col-md-4  col-sm-6 address-details">
    				<div class="bloc">
	    				<h5 class="libelle">{{ $ad->libelle }}</h5>
	    				<div class="bloc-details">
	    					<div class="name">Nom : {{ $ad->users->prenom }} {{ $ad->users->nom }} </div>
		    				<div class="addres">Addresee : {{ $ad->adresse }}</div>
		    				<div class="adress2">Adresse 2 : @if (isset($ad->adresse_suppl)) {{ $ad->adresse_suppl }} @else  Non renseigné @endif</div>
		    				<div class="cpville">CP Ville : {{ $ad->villes->code_postal }} {{ $ad->villes->libelle }}</div>
		    				<div class="country">Pays : {{ $ad->pays->nom_fr_fr }}</div>
		    				<div class="phone">Téléphone : {{ $ad->telephone }}</div>
		    				<div class="infosupp">Complement : @if (isset($ad->complement)) {{ $ad->complement }} @else Non renseigné @endif</div>

	    				</div>
	    				<div class="bloc-btn">
	    					<div class="row">		    					
	    						<div class="form-group col-xs-5 col-xs-offset-1">
	    							<!-- Button trigger modal New Addresse -->
									<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal_address_update_{{ $ad->id }}">
									  	<i class="fa fa-refresh fa-lg" aria-hidden="true"></i> &nbsp Update
									</button>				   
	    						</div>
	    						<div class="form-group col-xs-5">
	    							<button type="button" class="btn btn-danger btn-block">
									  	<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i> &nbsp Delete
									</button>
	    						</div>
    						</div>		    					
    					</div>
	    			</div>
    			</div>

    			<!-- Modal Update Addresse -->
				<div class="modal fade modal-address-update" id="modal_address_update_{{ $ad->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  	<div class="modal-dialog" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        		<h4 class="modal-title" id="myModalLabel">Mise à jour Addresse</h4>
				      		</div>
				      		{!! Form::open(['method' => 'post']) !!}
				      		<div class="modal-body">
				      			<div class="row">	
			      					<div class="col-md-6 col-sm-6">
			      						<div class="row">
			      							<div class="form-group col-md-12 col-sm-12">
												{!! Form::label('addresslibelle', 'Libellé *') !!}
												{!! Form::text('addresslibelle', $ad->libelle, ['class' => 'form-control input-sm', 'placeholder' => 'libellé', 'required' => 'required']) !!}
									        </div>
				      						<div class="form-group col-md-12 col-sm-12">
												{!! Form::label('addressname', 'Prénom *') !!}
												{!! Form::text('addressname', $ad->users->prenom, ['class' => 'form-control input-sm', 'placeholder' => 'prénom', 'required' => 'required']) !!}
									        </div>
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('firstname', 'Nom *') !!}
									        	{!! Form::text('firstname', $ad->users->nom, ['class' => 'form-control input-sm', 'placeholder' => 'nom', 'required' => 'required']) !!}
									        </div>
									        <!-- <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('company', 'Société *') !!}
									        	{!! Form::text('company', null, ['class' => 'form-control input-sm', 'placeholder' => 'société', 'required' => 'required']) !!}
									        </div> -->
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('address', 'Addresse *') !!}
									        	{!! Form::text('address', $ad->adresse, ['class' => 'form-control input-sm', 'placeholder' => 'addresse', 'required' => 'required']) !!}
									        </div>
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('address2 ', 'Addresse complémentaire') !!}
									        	{!! Form::text('address2', $ad->adresse_suppl, ['class' => 'form-control input-sm', 'placeholder' => 'addresse complémantaire', 'required' => 'required']) !!}
									        </div>
			      						</div>
			      					</div>
			      				
			      					<div class="col-md-6 col-sm-6">
			      						<div class="row">
			      							<div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('codepostal ', 'Code postal *') !!}
									        	{!! Form::text('codepostal', $ad->villes->code_postal, ['class' => 'form-control input-sm', 'placeholder' => 'code postal', 'required' => 'required']) !!}
									        </div>
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('city ', 'Ville *') !!}
									        	{!! Form::text('city', $ad->villes->libelle, ['class' => 'form-control input-sm', 'placeholder' => 'ville', 'required' => 'required']) !!}
									        </div>
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('country ', 'Pays *') !!}
									        	{!! Form::text('country', $ad->pays->nom_fr_fr, ['class' => 'form-control input-sm', 'placeholder' => 'pays', 'required' => 'required']) !!}
									        </div>

									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('phone ', 'Téléphone *') !!}
									        	{!! Form::text('phone', $ad->telephone, ['class' => 'form-control input-sm', 'placeholder' => 'téléphone', 'required' => 'required']) !!}
									        </div>
									        <!-- <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('cellular ', 'Téléphone portable *') !!}
									        	{!! Form::text('city', $ad->villes->libelle, ['class' => 'form-control input-sm', 'placeholder' => 'téléphone portable', 'required' => 'required']) !!}
									        </div> -->
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('infocomplement ', 'Information supplémentaire') !!}
									        	{!! Form::text('infocomplement', $ad->complement, ['class' => 'form-control input-sm', 'placeholder' => 'informations supplémentaire', 'required' => 'required']) !!}
									        </div>
			      						</div>
			      					</div>				      				
				      			</div>
				      		</div>
				      		<div class="modal-footer">
				        		{!! Form::button('Close', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}				   
				        		{!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
				      		</div>
				      		{!! Form::close() !!}
				    	</div>
				  	</div>
				</div>
				<!-- Fin Modal Update Addresse -->
	    		@endforeach

    			<div class="col-md-12 col-sm-12 address-new">
	    			<!-- Button trigger modal New Addresse -->
					<button type="button" class="btn btn-primary .btn-block" data-toggle="modal" data-target="#modal-address-new">
					  	Ajouter une première adresse
					</button>
	    		</div>

				<!-- Modal New Addresse -->
				<div class="modal fade modal-address-new" id="modal-address-new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  	<div class="modal-dialog" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        		<h4 class="modal-title" id="myModalLabel">Nouvelle addresse</h4>
				      		</div>
				      		{!! Form::open(['method' => 'post']) !!}
				      		<div class="modal-body">
				      			<div class="row">	
			      					<div class="col-md-6 col-sm-6">
			      						<div class="row">
			      							<div class="form-group col-md-12 col-sm-12">
												{!! Form::label('addresslibelle', 'Libellé *') !!}
												{!! Form::text('addresslibelle', null, ['class' => 'form-control input-sm', 'placeholder' => 'libellé', 'required' => 'required']) !!}
									        </div>
				      						<div class="form-group col-md-12 col-sm-12">
												{!! Form::label('addressname', 'Prénom *') !!}
												{!! Form::text('addressname', null, ['class' => 'form-control input-sm', 'placeholder' => 'prénom', 'required' => 'required']) !!}
									        </div>
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('firstname', 'Nom *') !!}
									        	{!! Form::text('firstname', null, ['class' => 'form-control input-sm', 'placeholder' => 'nom', 'required' => 'required']) !!}
									        </div>
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('company', 'Société *') !!}
									        	{!! Form::text('company', null, ['class' => 'form-control input-sm', 'placeholder' => 'société', 'required' => 'required']) !!}
									        </div>
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('address', 'Addresse *') !!}
									        	{!! Form::text('address', null, ['class' => 'form-control input-sm', 'placeholder' => 'addresse', 'required' => 'required']) !!}
									        </div>
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('address2 ', 'Addresse complémentaire *') !!}
									        	{!! Form::text('address2', null, ['class' => 'form-control input-sm', 'placeholder' => 'addresse complémantaire', 'required' => 'required']) !!}
									        </div>
			      						</div>
			      					</div>
			      				
			      					<div class="col-md-6 col-sm-6">
			      						<div class="row">
			      							<div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('codepostal ', 'Code postal *') !!}
									        	{!! Form::text('codepostal', null, ['class' => 'form-control input-sm', 'placeholder' => 'code postal', 'required' => 'required']) !!}
									        </div>
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('city ', 'Ville *') !!}
									        	{!! Form::text('city', null, ['class' => 'form-control input-sm', 'placeholder' => 'ville', 'required' => 'required']) !!}
									        </div>
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('country ', 'Pays *') !!}
									        	{!! Form::text('country', null, ['class' => 'form-control input-sm', 'placeholder' => 'pays', 'required' => 'required']) !!}
									        </div>

									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('phone ', 'Téléphone fixe *') !!}
									        	{!! Form::text('phone', null, ['class' => 'form-control input-sm', 'placeholder' => 'téléphone fixe', 'required' => 'required']) !!}
									        </div>
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('cellular ', 'Téléphone portable *') !!}
									        	{!! Form::text('city', null, ['class' => 'form-control input-sm', 'placeholder' => 'téléphone portable', 'required' => 'required']) !!}
									        </div>
									        <div class="form-group col-md-12 col-sm-12">
									        	{!! Form::label('infosupp ', 'Information supplémentaire *') !!}
									        	{!! Form::text('infosupp', null, ['class' => 'form-control input-sm', 'placeholder' => 'informations supplémentaire', 'required' => 'required']) !!}
									        </div>
			      						</div>
			      					</div>				      				
				      			</div>
				      		</div>
				      		<div class="modal-footer">
				        		{!! Form::button('Close', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}				   
				        		{!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
				      		</div>
				      		{!! Form::close() !!}
				    	</div>
				  	</div>
				</div>
				<!-- Fin Modal New Addresse -->
	    	</div>
	    	<!-- Fin Panel Addresse -->
	    	<div role="tabpanel" class="tab-pane" id="messages">...</div>
	    	<div role="tabpanel" class="tab-pane" id="settings">...</div>
	  	</div>	
	</div>
</div>

@stop