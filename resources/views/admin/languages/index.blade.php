@extends('admin.layout.home')

@section('content')
<div class="container-fluid languages">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Languages</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="padding-top: 20px; padding-bottom: 40px"> 
            <ul>
                <li>
                    <a class="btn btn-lg btn-primary col-lg-12 " href="{{ route('admin.languages.create') }}">
                        <span>
                            Crée un fichier de traduction<br>
                            <small>Création d'un nouveau fichier de traduction</small>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- Zero Configuration Table -->
            <div class="panel panel-default">
                <div class="panel-heading">Liste des fichiers de langues</div>
                <div class="panel-body">
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                           width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">Fichiers</th>
                                <th class="text-center">Mise à jour</th>
                                <th class="text-center">Suppression</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($files as $key => $values)                           
                            <tr id="languages" class="languages_{{$key}}" data-id="{{$key}}">
                                <td>{{$values}}</td>
                                <td class="text-center"><a href="" class="languages_eyes" data-toggle="modal" data-target="#{{$key}}"><i class="fa fa-eye fa-2x"></i></a></td>
                                <td class="text-center">                             
                                    {!! Form::open(['url' => route('admin.languages.destroy', ':LANGUAGES_ID'), 'method' => 'DEL', 'id' => 'form-languages-delete' ]) !!}
                                        <a class="languages_delete"><i class="fa fa-trash fa-2x"></i></a>
                                    {!! Form::close() !!} 
                                </td>                               
                            </tr>                
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Update Files-->
@foreach($files as $key => $values)
<div class="modal fade" id="{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['method' => 'put', 'url' => route('admin.languages.update', $key) ]) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Fichier de traduction: {{$values}}</h4>
            </div>
            <div class="modal-body">
                <h4>Français</h4>
                <p>
                    <?php $lines = file(realpath(base_path('resources/lang/fr/'.$values)))?>
                    <textarea class="form-control" name="francais" placeholder="francais" required="required" cols="50" rows="10" id="francais">
                        <?php
                            foreach ($lines as $line_num => $line) {
                                echo $line;
                            }
                        ?>
                    </textarea>
                </p>

                <h4>Anglais</h4>
                <p>
                    <?php $lines = file(realpath(base_path('resources/lang/en/'.$values)))?>
                    <textarea class="form-control" name="english" placeholder="english" required="required" cols="50" rows="10" id="english">
                        <?php
                            foreach ($lines as $line_num => $line) {
                                echo $line;
                            }
                        ?>
                    </textarea>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::submit('Modifier', ['class' => 'btn btn-primary', 'name' => 'send']) !!}
                {!! Form::close() !!}
                {!! Form::open(['method' => 'delete', 'url' => route('admin.languages.destroy', $key) ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger glyphicon glyphicon-trash', 'name' => 'send']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endforeach

@stop