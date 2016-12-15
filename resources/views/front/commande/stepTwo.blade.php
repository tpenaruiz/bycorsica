@extends('front.layout.default')
@section('content')
<div class="container">
    @include('front.blocks.breadcrumbs')

    <div class="row commandeStepTwo-heading">
        <div class="col-md-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li>
                    <a href="">
                        <h4 class="list-group-item-heading">Etape 1</h4>
                        <p class="list-group-item-text">Connection</p>
                    </a>
                </li>
                <li class="active">
                    <a href="">
                        <h4 class="list-group-item-heading">Etapes 2</h4>
                        <p class="list-group-item-text">Adresse</p>
                    </a>
                </li>
                <li class="disabled">
                    <a href="">
                        <h4 class="list-group-item-heading">Etapes 3</h4>
                        <p class="list-group-item-text">Livraison</p>
                    </a>
                </li>
                <li class="disabled">
                    <a href="">
                        <h4 class="list-group-item-heading">Etapes 4</h4>
                        <p class="list-group-item-text">Paiement</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Selectionn d'une addresse -->
    <div class="row commandeStepTwo-address-select">
        <div class="col-md-10 col-md-offset-1">
            <h4>Veuillez choisir une adresse parmi vos adresses existantes :</h4>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Addresse 1</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-8">Mr David VINCENT - 12, rue des Bacs - 75009 Paris</div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-address-update">
                            <i class="fa fa-refresh fa-lg" aria-hidden="true"></i> &nbsp Update
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary btn-block">
                            <i class="fa fa-check-square fa-lg" aria-hidden="true"></i> &nbsp Choisir
                        </button>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Addresse 1</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-8">Mr David VINCENT - 12, rue des Bacs - 75009 Paris</div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-address-update">
                            <i class="fa fa-refresh fa-lg" aria-hidden="true"></i> &nbsp Update
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary btn-block">
                            <i class="fa fa-check-square fa-lg" aria-hidden="true"></i> &nbsp Choisir
                        </button>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Addresse 1</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-8">Mr David VINCENT - 12, rue des Bacs - 75009 Paris</div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-address-update">
                            <i class="fa fa-refresh fa-lg" aria-hidden="true"></i> &nbsp Update
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary btn-block">
                            <i class="fa fa-check-square fa-lg" aria-hidden="true"></i> &nbsp Choisir
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal New Addresse -->
    <div class="modal fade modal-address-update" id="modal-address-update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

    <!-- Ajout d'une adresse -->
    <div class="row commandeStepTwo-address-add">
        <div class="col-md-10 col-md-offset-1">
            <h4>Ou ajouter une nouvelle adresse pour la livraison :</h4>
        </div>

        <div class="col-md-5 col-md-offset-1">
            {!! Form::open(['method' => 'post', 'url' => route('account')]) !!}          
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
                  
        <div class="col-md-5">
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

        <div class="col-md-12 col-sm-12 btn-address-add">
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
@stop