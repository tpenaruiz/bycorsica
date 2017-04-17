@extends('admin.layout.home')

@section('content')

<?php
    $var = "<?php return['key1' => 'value1', 'key2' => 'value2', 'key3' => 'value3' etc...]; ?>"
?>

<style type="text/css">
    p { 
        background-color: #f5f5f5; 
        color:black;
        padding-left: 10px; 
        padding-right: 10px; 
        padding-top: 10px; 
        padding-bottom: 10px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -o-border-radius: 3px;
        -ms-border-radius: 3px;
        border-radius: 3px;
        font-size: 1em;
        border: 1px solid #ccc;
    }
</style>


<div class="container-fluid languages">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Ajout de fichiers de langue</h2>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>
                    Hello, La traduction de fichier marche toujours par 2.<br />
                    On a un fichier en français et un fichier en anglais. 
                    Après avoir crée ses deux fichier vous devez traduire ce que vous souhaiter. <br />
                    <span>Alors allez y et amusez vous bien !</span><br /><br />
                    <span>
                        <strong>Exemple d'utilisation :</strong><br/>
                        {{$var}}
                    </span>
                </p>
            </div>
        </div>

        {!! Form::open(['method' => 'post', 'url' => route('admin.languages.store')]) !!}
        <div class="row">
            <div class="col-md-8 col-md-offset-2">             
                <div class="form-group">
                    {!! Form::label('name', 'Nom du fichier *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                    {!! Form::text('nom', '', array('class'=>'form-control', 'name'=>'name', 'placeholder' => 'nom du fichier', 'required'=>'required')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('francais', 'Francais *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                    <textarea class="form-control" id="francais" name="francais" placeholder="francais" required="required" cols="50" rows="10" id="francais"><?= $var; ?></textarea>
                </div>

                <div class="form-group">
                    {!! Form::label('english', 'English *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                    <textarea class="form-control" id="english" name="english" placeholder="english" required="required" cols="50" rows="10" id="english"><?= $var ?></textarea>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="form-group col-md-offset-3 col-md-3 col-sm-offset-3 col-sm-3 col-xs-6" >
                        <a href="{{ route('admin.languages') }}" class="btn btn-primary btn-block">Annuler</a>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 col-xs-6" >
                        {!! Form::submit('Valider', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop