<!-- Debut Panel info -->
<div role="tabpanel" @if($anchor=='infos') class="tab-pane infos active" @else  class="tab-pane infos" @endif id="infos">
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