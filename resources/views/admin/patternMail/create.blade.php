@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Création d'un modèle de Mail</h2>



                <div class="panel with-nav-tabs panel-primary">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Création du mail</a></li>
                            <li><a href="#tab2" data-toggle="tab">Résultat</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                {!! Form::open(['method' => 'post', 'url' => route('patternMail.store')]) !!}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('id_langue', 'langue *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                            {!! Form::select('id_langue', $langue, '', ['class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('id_type', 'type du mail *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                            {!! Form::select('id_type', $type, '', ['class'=>'form-control']) !!}
                                        </div>
                                        <!-- Fin function List -->

                                        <div class="form-group">
                                            {!! Form::label('status', 'Status *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                            <select name="status" class="form-control">
                                                <option value="Actif">Actif</option>
                                                <option value="Archivé">Archivé</option>
                                            </select>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('expediteur', 'Expediteur *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                            {!! Form::text('expediteur', '', array('class'=>'form-control', 'placeholder' => 'Expediteur')) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('destinateur', 'Destinateur *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                            {!! Form::text('destinateur', '', array('class'=>'form-control', 'placeholder' => 'Destinateur', 'required'=>'required')) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('objet', 'Objet *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                            {!! Form::text('objet', '', array('class'=>'form-control', 'placeholder' => 'Objet')) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('contenu', 'Contenu *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                            {!! Form::textarea('contenu', '', array('class'=>'form-control', 'placeholder' => 'Contenu', 'required'=>'required')) !!}
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <input type="submit" name="submit" id="submit" class="form-control btn btn-primary" value="CREATE">
                                        </div>
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                Voici le resultat
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>

@stop