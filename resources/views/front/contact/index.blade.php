 @extends('front.layout.default')

@section('content')

<div class="container">
    @include('front.blocks.breadcrumbs')

    <div class="row contact-content">
        <div class="panel">
            <div class="panel-heading">
                    <h3 class="panel-title text-center">{{ Lang::get('general.contact_us') }}</h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['role' => 'form', 'id' => 'contact_form', 'method' => 'post',  'url' => '/contact']) !!}
                    {{ csrf_field() }}

                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <div class="form-group {{ $errors->has('object') ? ' has-error' : '' }} col-md-12 col-sm-12">
                            {!! Form::label('object', Lang::get('general.object')) !!}
                            {!! Form::select('object', $object, '0', ['class' => 'form-control input-sm', 'required' => 'required']) !!}

                            @if ($errors->has('object'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('object') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('reference_commande') ? ' has-error' : '' }} col-md-12 col-sm-12">
                            {!! Form::label('reference_commande', Lang::get('general.reference_commande')) !!}
                            {!! Form::text('reference_commande', null, ['class' => 'form-control input-sm', 'placeholder' => Lang::get('general.reference_commande_placeholder'), 'required' => 'required']) !!}
                            @if ($errors->has('reference_commande'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('reference_commande') }}</strong>
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
                        <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }} col-md-12 col-sm-12">
                            {!! Form::label('messag', Lang::get('general.message')) !!}
                            {!! Form::textarea('messag', null, ['class' => 'form-control input-sm', 'placeholder' => Lang::get('general.message_placeholder'), 'required' => 'required']) !!}
                            
                            @if ($errors->has('messag'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('messag') }}</strong>
                                </span>
                            @endif
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
    