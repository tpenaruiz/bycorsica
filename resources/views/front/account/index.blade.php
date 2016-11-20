@extends('front.layout.home')

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
		<div class="col-md-12">
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
		    	<div role="tabpanel" class="tab-pane infos active" id="infos">
		    		{!! Form::open(['method' => 'post', 'url' => route('account')]) !!}
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
							<div class="form-group col-md-12 col-sm-12">
								{!! Form::label('secondname', 'Prénom *') !!}
								{!! Form::text('secondname', null, ['class' => 'form-control input-sm', 'placeholder' => 'prénom', 'required' => 'required']) !!}
					        </div>
					        <div class="form-group col-md-12 col-sm-12">
					        	{!! Form::label('firstname', 'Nom *') !!}
					        	{!! Form::text('firstname', null, ['class' => 'form-control input-sm', 'placeholder' => 'nom', 'required' => 'required']) !!}
					        </div>

					        <div class="form-group col-md-12 col-sm-12">
					        	{!! Form::label('birthday', 'Date de naissance *') !!}
					        	{!! Form::text('birthday', null, ['class' => 'form-control input-sm', 'required' => 'required']) !!}
					        </div>

					        <div class="form-group col-md-12 col-sm-12">
					        	{!! Form::label('email', 'Adresse Email *') !!}
					        	{!! Form::email('email', null, ['class' => 'form-control input-sm', 'placeholder' => 'email', 'required' => 'required']) !!}
					        </div>
					        <div class="form-group col-md-12 col-sm-12">
					        	{!! Form::label('password', 'Password *') !!}
					        	{!! Form::password('password', ['class' => 'form-control input-sm', 'placeholder' => 'password', 'required' => 'required']) !!}
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

		    	<div role="tabpanel" class="tab-pane address" id="address">
		    		<div class="col-md-12 libelle">
		    			<p>Choisissez vos adresses de facturation. Ces dernières seront présélectionnées lors de vos commandes. Vous pouvez également ajouter d'autres adresses, ce qui est particulièrement intéressant pour envoyer des cadeaux ou recevoir votre commande au bureau.</p>
		    		</div>

		    		<div class="col-md-12 firstaddress">
		    			<p>Veuillez ajouter une <a href="" data-toggle="modal" data-target="#modal-address-new">première adresse</a></p>
		    		</div>

	    			<div class="col-md-4  col-sm-6 address-details">
	    				<div class="bloc">
		    				<h5 class="libelle">Adresse</h5>
		    				<div class="bloc-details">
		    					<div class="name">Nom : David Vincent</div>
			    				<div class="addres">Addresee : rue des Bacs</div>
			    				<div class="adress2">Adresse 2 :Adresse 2</div>
			    				<div class="cpville">CP Ville : 75009 Paris</div>
			    				<div class="country">Pays : France</div>
			    				<div class="phone">Téléphone fixe : 0122334455</div>
			    				<div class="cellular">Téléphone portable : 0622334455</div>
		    				</div>
		    				<div class="bloc-btn">
		    					<div class="row">		    					
		    						<div class="form-group col-xs-5 col-xs-offset-1">
		    							<!-- Button trigger modal New Addresse -->
										<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-address-update">
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
	    			<div class="col-md-4  col-sm-6 address-details">
	    				<div class="bloc">
		    				<h5 class="libelle">Adresse</h5>
		    				<div class="bloc-details">
		    					<div class="name">Nom : David Vincent</div>
			    				<div class="addres">Addresee : rue des Bacs</div>
			    				<div class="adress2">Adresse 2 :Adresse 2</div>
			    				<div class="cpville">CP Ville : 75009 Paris</div>
			    				<div class="country">Pays : France</div>
			    				<div class="phone">Téléphone fixe : 0122334455</div>
			    				<div class="cellular">Téléphone portable : 0622334455</div>
		    				</div>
		    				<div class="bloc-btn">
		    					<div class="row">		    					
		    						<div class="form-group col-xs-5 col-xs-offset-1">
		    							<!-- Button trigger modal New Addresse -->
										<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-address-update">
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
	    			<div class="col-md-4  col-sm-6 address-details">
	    				<div class="bloc">
		    				<h5 class="libelle">Adresse</h5>
		    				<div class="bloc-details">
		    					<div class="name">Nom : David Vincent</div>
			    				<div class="addres">Addresee : rue des Bacs</div>
			    				<div class="adress2">Adresse 2 :Adresse 2</div>
			    				<div class="cpville">CP Ville : 75009 Paris</div>
			    				<div class="country">Pays : France</div>
			    				<div class="phone">Téléphone fixe : 0122334455</div>
			    				<div class="cellular">Téléphone portable : 0622334455</div>
		    				</div>
		    				<div class="bloc-btn">
		    					<div class="row">		    					
		    						<div class="form-group col-xs-5 col-xs-offset-1">
		    							<!-- Button trigger modal New Addresse -->
										<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-address-update">
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
	    			<div class="col-md-4  col-sm-6 address-details">
	    				<div class="bloc">
		    				<h5 class="libelle">Adresse</h5>
		    				<div class="bloc-details">
		    					<div class="name">Nom : David Vincent</div>
			    				<div class="addres">Addresee : rue des Bacs</div>
			    				<div class="adress2">Adresse 2 :Adresse 2</div>
			    				<div class="cpville">CP Ville : 75009 Paris</div>
			    				<div class="country">Pays : France</div>
			    				<div class="phone">Téléphone fixe : 0122334455</div>
			    				<div class="cellular">Téléphone portable : 0622334455</div>
		    				</div>
		    				<div class="bloc-btn">
		    					<div class="row">		    					
		    						<div class="form-group col-xs-5 col-xs-offset-1">
		    							<!-- Button trigger modal New Addresse -->
										<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-address-update">
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

	    			<div class="col-md-12 col-sm-12 address-new">
		    			<!-- Button trigger modal New Addresse -->
						<button type="button" class="btn btn-primary .btn-block" data-toggle="modal" data-target="#modal-address-new">
						  	Ajouter une première adresse
						</button>
		    		</div>

		    		<!-- Modal Update Addresse -->
					<div class="modal fade modal-address-update" id="modal-address-update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  	<div class="modal-dialog" role="document">
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        		<h4 class="modal-title" id="myModalLabel">Mise à jour de l'addresse</h4>
					      		</div>
					      		{!! Form::open(['method' => 'post', 'url' => route('account')]) !!}
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
					<!-- Fin Modal Update Addresse -->

					<!-- Modal New Addresse -->
					<div class="modal fade modal-address-new" id="modal-address-new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  	<div class="modal-dialog" role="document">
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        		<h4 class="modal-title" id="myModalLabel">Nouvelle addresse</h4>
					      		</div>
					      		{!! Form::open(['method' => 'post', 'url' => route('account')]) !!}
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
		    	<div role="tabpanel" class="tab-pane" id="messages">...</div>
		    	<div role="tabpanel" class="tab-pane" id="settings">...</div>
		  	</div>
		
	</div>
</div>

@stop