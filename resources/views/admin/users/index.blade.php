@extends('admin.layout.home')
@section('content')
    <div class="users_page">
        <link href="{{ asset('admin/css/search.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('admin/css/table.css') }}" rel="stylesheet" type="text/css"/>

        <section class="content-header">
            <h1>
                Users
                <small>Liste</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ ucfirst(route('administration')) }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Users</li>
            </ol>
        </section>

        <!-- Main content -->
        <div class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div>
                        @include('admin.layout.error')
                        @include('admin.layout.errors_request')
                        @include('admin.layout.success')
                        <div id="message_info"></div>
                    </div>

                    <div class="box-header" style="overflow: auto;">
                        {!! Form::open(array('url' => route('users.search'), 'class'=>'search-form')) !!}
                        <div class="form-group has-feedback">
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" class="form-control" name="search" id="search" placeholder="search">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                        {!! Form::close() !!}

                    </div><!-- /.box-header -->

                    <div class="container">
                        <div class="row col-md-10 col-md-offset-0 custyle">
                            <table class="table table-striped custab">
                                <thead>
                                <a href="{{route('users.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b>
                                    Ajout nouveau utilisateur</a>
                                <tr>
                                    <th>ID</th>
                                    <th>Rôle</th>
                                    <th>Ville</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Prénom</th>
                                    <th>Date de naissance</th>
                                    <th>status</th>
                                    <th>Dérnière connection</th>
                                    <th>Création du compte</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                @foreach($users as $row)
                                    <tr class="usersLinter_{{$row->id}}" data-id="{{$row->id}}">
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->roles->libelle}}</td>
                                        <td>{{$row->villes->libelle}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->prenom}}</td>
                                        <td>{{$row->date_naissance}}</td>

                                        <td>
                                            <div id="innactif_<?=$row->id?>" style="display: none;">
                                                {!! Form::open(['route'=>['users.statusOff', ':PARAMS_ID'], 'method' => 'INNACTIF', 'id'=>'form-innactif']) !!}
                                                <a href="#" class="btn_innactif">
                                                    <span class="label label-success">Innactif</span>
                                                </a>
                                                {!! Form::close() !!}
                                            </div>

                                            <div id="actif_<?=$row->id?>" style="display: none;">
                                                {!! Form::open(['route'=>['users.statusOn', ':PARAMS_ID'], 'method' => 'ACTIF', 'id'=>'form-actif']) !!}
                                                <a href="#" class="btn_actif">
                                                    <span class="label label-danger">Actif</span>
                                                </a>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>

                                        <td>{{$row->derniere_connexion}}</td>
                                        <td>{{$row->created_at}}</td>

                                        <td class="text-center">
                                            <a class='btn btn-info btn-xs'
                                               href="{{route('users.edit', $row->id)}}"><span
                                                        class="glyphicon glyphicon-edit"></span> Edit</a>

                                            <div id="del_<?=$row->id?>">
                                                {!! Form::open(['route'=>['users.destroy', ':PARAMS_ID'], 'method' => 'DEL', 'id' => 'form-del']) !!}
                                                <a href="#" class="btn_del btn btn-danger btn-xs">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                    Del
                                                </a>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                            <div style="margin-left: 40%;" class="paginate">
                                {!! $users->render() !!}
                            </div>
                        </div>
                    </div>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@stop