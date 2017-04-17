@extends('admin.layout.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Type E-Mail</h2>
                <!-- Zero Configuration Table -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="pull-right">
                            Liste des type de Mail
                        </span>

                        <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#createType">
                            Créér un type
                        </a>
                    </div>
                    <div class="panel-body">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>type</th>
                                <th>created_at</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>type</th>
                                <th>created_at</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($type as $row)
                                <tr id="typeMail" class="typeMail_{{$row->id}}" data-id="{{$row->id}}">
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->type}}</td>
                                    <td>{{$row->getCreateddateAttribute()}}</td>
                                    <td>
                                        <!-- Action -->
                                        {!! Form::open(['route'=>['typeMail.destroy', ':TYPEMAIL_ID'], 'method' => 'DEL', 'id' => 'form-typeMail-delete']) !!}
                                        <a class="ico_delete typeMail_delete"><i class="fa fa-trash fa-2x"></i></a>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- MODAL Create Type Mail --}}
            @include('admin.modal.modal_create_type_mail')

            <div class="col-md-12">
                <h2 class="page-title">Pattern E-mail</h2>
                <!-- Zero Configuration Table -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="pull-right">
                            Liste des modèle de Mail
                        </span>

                        <a class="btn btn-sm btn-primary" href="{{route('patternMail.create')}}">
                            <i class="fa fa-plus-circle"></i>
                        </a>
                    </div>
                    <div class="panel-body">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Langue</th>
                                <th>Type</th>
                                <th>Expediteur</th>
                                <th>Destinateur</th>
                                <th>Objet</th>
                                <th>Contenu</th>
                                <th>Créer le:</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Langue</th>
                                <th>Type</th>
                                <th>Expediteur</th>
                                <th>Destinateur</th>
                                <th>Objet</th>
                                <th>Contenu</th>
                                <th>Créer le:</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($patternMail as $row)
                                <tr id="patternMail" class="patternMail_{{$row->id}}" data-id="{{$row->id}}">
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->langues->libelle}}</td>
                                    <td>{{$row->type->type}}</td>
                                    <td>{{$row->expediteur}}</td>
                                    <td>{{$row->destinateur}}</td>
                                    <td>{{$row->objet}}</td>
                                    <td>{{mb_strimwidth($row->contenu, 0, 30, '...')}}</td>
                                    <td>{{$row->getCreateddateAttribute()}}</td>
                                    <td>
                                        <!-- Action -->
                                        <a href="{{route('patternMail.show', 1)}}" class="ico_show "><i class="fa fa-eye fa-2x"></i></a>

                                        {!! Form::open(['route'=>['patternMail.destroy', ':PATTERNMAIL_ID'], 'method' => 'DEL', 'id' => 'form-patternMail-delete']) !!}
                                        <a class="ico_delete patternMail_delete"><i class="fa fa-trash fa-2x"></i></a>
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
@stop