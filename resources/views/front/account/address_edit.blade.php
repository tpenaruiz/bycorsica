@extends('front.layout.default')

@section('content')

<script src="{{ asset('front/ajax/account/address_edit.js') }}"></script>

<div class="container">
	@include('front.blocks.breadcrumbs')

	<div class="row update-address-content">
		<div class="panel">
			<div class="panel-heading">
		        	<h3 class="panel-title text-center">Mise à jour de l'adresse : <span class="libelle">{{ $adresse->libelle }}</span></h3>
			</div>
			<div class="panel-body">
				{!! Form::open(['method' => 'post', 'id'=>'form_address_update', 'route'=>['account.address.update', $adresse->id]]) !!}
	      		<div class="modal-body">
	      			<div class="row">	
      					<div class="col-md-3 col-md-offset-3 col-sm-6">
      						<div class="row">
      							<div class="form-group {{ $errors->has('libelle') ? ' has-error' : '' }} col-md-12 col-sm-12">
									{!! Form::label('libelle', 'Libellé *') !!}
									{!! Form::text('libelle', $adresse->libelle, ['class' => 'form-control input-sm', 'placeholder' => 'libellé', 'required' => 'required']) !!}
						        
									@if ($errors->has('libelle'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('libelle') }}</strong>
		                                </span>
		                            @endif
						        </div>
	      						<div class="form-group {{ $errors->has('address_firstname') ? ' has-error' : '' }} col-md-12 col-sm-12">
									{!! Form::label('address_firstname', 'Prénom *') !!}
									{!! Form::text('address_firstname', $adresse->prenom, ['class' => 'form-control input-sm', 'placeholder' => 'prénom', 'required' => 'required']) !!}
						        
									@if ($errors->has('address_firstname'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('address_firstname') }}</strong>
		                                </span>
		                            @endif
						        </div>
						        <div class="form-group {{ $errors->has('address_secondname') ? ' has-error' : '' }} col-md-12 col-sm-12">
						        	{!! Form::label('address_secondname', 'Nom *') !!}
						        	{!! Form::text('address_secondname', $adresse->nom, ['class' => 'form-control input-sm', 'placeholder' => 'nom', 'required' => 'required']) !!}
						       
						        	@if ($errors->has('address_secondname'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('address_secondname') }}</strong>
		                                </span>
		                            @endif
						        </div>
						        <div class="form-group {{ $errors->has('company') ? ' has-error' : '' }} col-md-12 col-sm-12">
						        	{!! Form::label('company', 'Société *') !!}
						        	{!! Form::text('company', $adresse->company, ['class' => 'form-control input-sm', 'placeholder' => 'société']) !!}
						        
						        	@if ($errors->has('company'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('company') }}</strong>
		                                </span>
		                            @endif
						        </div>
						        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }} col-md-12 col-sm-12">
						        	{!! Form::label('phone ', 'Téléphone *') !!}
						        	{!! Form::text('phone', $adresse->telephone, ['class' => 'form-control input-sm', 'placeholder' => 'téléphone', 'required' => 'required']) !!}
						        
						        	@if ($errors->has('phone'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('phone') }}</strong>
		                                </span>
		                            @endif
						        </div>
						        <div class="form-group {{ $errors->has('cellular') ? ' has-error' : '' }} col-md-12 col-sm-12">
						        	{!! Form::label('phone2', 'Téléphone supplémentaire') !!}
						        	{!! Form::text('phone2', $adresse->telephone2, ['class' => 'form-control input-sm', 'placeholder' => 'téléphone supplémentaire']) !!}
						        
						        	@if ($errors->has('phone2'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('phone2') }}</strong>
		                                </span>
		                            @endif
						        </div>  
      						</div>
      					</div>
      				
      					<div class="col-md-3 col-sm-6">
      						<div class="row">
      							<div class="form-group {{ $errors->has('country') ? ' has-error' : '' }} col-md-12 col-sm-12">
						        	{!! Form::label('country', 'Pays *') !!}
						        	{!! Form::select('country', $pays, $adresse->id_pays, ['class' => 'form-control input-sm', 'id' => 'country', 'required' => 'required', 'data-pays' => $adresse->id_pays]) !!}
						        
						        	@if ($errors->has('country'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('country') }}</strong>
		                                </span>
		                            @endif
						        </div>
						        <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }} col-md-12 col-sm-12">
						        	{!! Form::label('city', 'Ville *') !!}
						        	{!! Form::select('city', $ville, $adresse->id_ville, ['class' => 'form-control input-sm', 'id' => 'city', 'required' => 'required', 'data-ville' => $adresse->id_ville]) !!}
						        
						        	@if ($errors->has('city'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('city') }}</strong>
		                                </span>
		                            @endif
						        </div>
      							<div class="form-group {{ $errors->has('codepostal') ? ' has-error' : '' }} col-md-12 col-sm-12">
						        	{!! Form::label('codepostal ', 'Code postal *') !!}
						        	{!! Form::text('codepostal', $adresse->villes->code_postal, ['class' => 'form-control input-sm', 'placeholder' => 'code postal', 'required' => 'required']) !!}
						        
						        	@if ($errors->has('codepostal'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('codepostal') }}</strong>
		                                </span>
		                            @endif
						        </div>
						        <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }} col-md-12 col-sm-12">
						        	{!! Form::label('address', 'Addresse *') !!}
						        	{!! Form::text('address', $adresse->adresse, ['class' => 'form-control input-sm', 'placeholder' => 'addresse', 'required' => 'required']) !!}
						        
						        	@if ($errors->has('address'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('address') }}</strong>
		                                </span>
		                            @endif
						        </div>
						        <div class="form-group col-md-12 col-sm-12">
						        	{!! Form::label('address2 ', 'Addresse complémentaire') !!}
						        	{!! Form::text('address2', $adresse->adresse_suppl, ['class' => 'form-control input-sm', 'placeholder' => 'addresse complémantaire']) !!}
						        </div>
						        <div class="form-group col-md-12 col-sm-12">
						        	{!! Form::label('infocomplement ', 'Information supplémentaire') !!}
						        	{!! Form::text('infocomplement', $adresse->complement, ['class' => 'form-control input-sm', 'placeholder' => 'informations supplémentaire']) !!}
						        </div>
      						</div>
      					</div>

      					<div class="col-md-12 col-sm-12">
							<div class="form-group col-md-offset-3 col-md-3 col-sm-offset-3 col-sm-3 col-xs-6" >
								{!! Form::submit(Lang::get('auth.cancel'), ['class' => 'btn btn-primary btn-block']) !!}
							</div>
							<div class="form-group col-md-3 col-sm-3 col-xs-6" >
								{!! Form::submit(Lang::get('auth.validate'), ['class' => 'btn btn-primary btn-block']) !!}
							</div>
						</div>				      				
	      			</div>
	      		</div>
	      		{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop