@extends('front.layout.default')
@section('content')
<div class="container">
    @include('front.blocks.breadcrumbs')

    <div class="row forgotPass">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{ Lang::get('passwords.reset_password') }}</h3>
            </div>
            <div class="panel-body">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                {!! Form::open(['role' => 'form', 'id' => 'reset_password_form', 'method' => 'post',  'url' => '/password/reset']) !!}   
                    {{ csrf_field() }}
                    {{ Form::hidden('token', $token) }}
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} col-md-12 col-sm-12">
                            {!! Form::label('email', Lang::get('auth.email_address')) !!}
                            {!! Form::email('email', $email or old('email'), ['class' => 'form-control input-sm', 'placeholder' => Lang::get('auth.email_address_placeholder'), 'required' => 'required', 'autofocus' => 'true']) !!}
                            
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>                       
                    </div>

                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-12 col-sm-12">
                            {!! Form::label('id_password', Lang::get('auth.password')) !!}
                            {!! Form::password('password', ['class' => 'form-control input-sm', 'id' => 'id_password', 'placeholder' => Lang::get('auth.password_placeholder'), 'required' => 'required']) !!}

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} col-md-12 col-sm-12">                            
                            {!! Form::label('password-confirm', Lang::get('auth.password_confirmation')) !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control input-sm', 'id' => 'password-confirm', 'placeholder' => Lang::get('auth.password_confirmation_placeholder'), 'required' => 'required']) !!}

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                {!! Form::submit(Lang::get('passwords.reset_password'), ['class' => 'btn btn-primary btn-block']) !!}
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
