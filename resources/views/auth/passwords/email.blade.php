@extends('front.layout.default')
@section('content')

<script type="text/javascript">
    if("{{ session('status') }}" != 0){ notie.alert(1, '{{ session('status') }}');}
</script>

<div class="container">
    @include('front.blocks.breadcrumbs')

    <div class="row forgotPass">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{ Lang::get('auth.forgot_your_password') }}</h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['role' => 'form', 'id' => 'send_password_reset_email_form', 'method' => 'post',  'url' => '/password/email']) !!}
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} col-md-12 col-sm-12">
                            {!! Form::label('email', Lang::get('auth.email_address')) !!}
                            {!! Form::email('email', null, ['class' => 'form-control input-sm', 'placeholder' => Lang::get('auth.email_address_placeholder'), 'required' => 'required']) !!}
                        
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>                       
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="form-group col-md-offset-3 col-md-3 col-sm-offset-3 col-sm-3 col-xs-6" >
                            {!! Form::submit(Lang::get('auth.cancel'), ['class' => 'btn btn-primary btn-block pull-right']) !!}
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