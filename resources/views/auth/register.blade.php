 @extends('front.layout.default')

@section('content')
<div class="container">
	@include('front.blocks.breadcrumbs')

	<div class="row registration-content">
		<div class="panel">
			<div class="panel-heading">
		        	<h3 class="panel-title text-center">{{ Lang::get('auth.creation_account') }}</h3>
			</div>
			<div class="panel-body">
			    {!! Form::open(['role' => 'form', 'id' => 'register_form', 'method' => 'post',  'url' => '/register']) !!}
			    	{{ csrf_field() }}
					<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
						<div class="form-group {{ $errors->has('second_name') ? ' has-error' : '' }} col-md-12 col-sm-12">
							{!! Form::label('second_name', Lang::get('auth.second_name')) !!}
							{!! Form::text('second_name', null, ['class' => 'form-control input-sm', 'placeholder' => Lang::get('auth.second_name_placeholder'), 'required' => 'required']) !!}
							@if ($errors->has('second_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('second_name') }}</strong>
                                </span>
                            @endif
				        </div>
				        <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }} col-md-12 col-sm-12">
				        	{!! Form::label('first_name', Lang::get('auth.first_name')) !!}
				        	{!! Form::text('first_name', null, ['class' => 'form-control input-sm', 'placeholder' => Lang::get('auth.first_name_placeholder'), 'required' => 'required']) !!}
				        	@if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
				        </div>
				        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} col-md-12 col-sm-12">
				        	{!! Form::label('email', Lang::get('auth.email_address')) !!}
				        	{!! Form::email('email', null, ['class' => 'form-control input-sm', 'placeholder' => Lang::get('auth.email_address_placeholder'), 'required' => 'required']) !!}
				        	@if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
				        </div>
				        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} col-md-12 col-sm-12">
				        	{!! Form::label('id_password', Lang::get('auth.password')) !!}
				        	{!! Form::password('password', ['class' => 'form-control input-sm', 'id' => 'id_password' ,'placeholder' => Lang::get('auth.password_placeholder'), 'required' => 'required']) !!}
				        	@if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
				        </div>
				        <div class="form-group col-md-12 col-sm-12">
				        	{!! Form::label('password-confirm', Lang::get('auth.password_confirmation')) !!}
				        	{!! Form::password('password_confirmation', ['class' => 'form-control input-sm', 'id' => 'password-confirm', 'placeholder' => Lang::get('auth.password_confirmation_placeholder'), 'required' => 'required']) !!}
				        </div>
				        <div class="form-group col-md-12 col-sm-12">						  	
					  		<div class="checkbox">
					    		<label for="newsletter">
					    			{!! Form::checkbox('newsletter', '1', true) !!}
					      			{{ Lang::get('auth.subscribe_to_the_newsletter') }}
					    		</label>
							</div>
						</div>
						<div class="form-group col-md-12 col-sm-12">						  	
					  		<div class="checkbox">
					    		<label for="offers">
					    			{!! Form::checkbox('offers', '1', true) !!}
					      			{{ Lang::get('auth.special_offers') }}
					    		</label>
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
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop
	