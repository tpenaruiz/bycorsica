@extends('front.layout.home')

@section('content')

<div class="container">
	@include('front.blocks.breadcrumbs')

	<div class="row registration-content">
		<div class="panel">
			<div class="panel-heading">
		        	<h3 class="panel-title text-center">Création de votre compte</h3>
			</div>
			<div class="panel-body">
			    {!! Form::open(['method' => 'post', 'url' => route('registration')]) !!}
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
				        	{!! Form::label('email', 'Adresse Email *') !!}
				        	{!! Form::email('email', null, ['class' => 'form-control input-sm', 'placeholder' => 'email', 'required' => 'required']) !!}
				        </div>
				        <div class="form-group col-md-12 col-sm-12">
				        	{!! Form::label('password', 'Password *') !!}
				        	{!! Form::password('password', ['class' => 'form-control input-sm', 'placeholder' => 'password', 'required' => 'required']) !!}
				        </div>
				        <div class="form-group col-md-12 col-sm-12">
				        	{!! Form::label('re-password', 'Confirmation Password *') !!}
				        	{!! Form::password('re-password', ['class' => 'form-control input-sm', 'placeholder' => 'confirmation password', 'required' => 'required']) !!}
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
							{!! Form::submit('Annuler!', ['class' => 'btn btn-primary btn-block']) !!}
						</div>
						<div class="form-group col-md-3 col-sm-3 col-xs-6" >
							{!! Form::submit('Valider!', ['class' => 'btn btn-primary btn-block']) !!}
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop
	