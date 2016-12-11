@extends('admin.layout.home')
@section('content')

    <section class="content-header">
        <h1>
            Pages
            <small>Users - Création -</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ ucfirst(route('administration')) }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pages</li>
        </ol>
    </section>

    <script src="{{ asset('admin/ajax/users/create.js') }}" type="text/javascript"></script>

    <div class="space"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div>
                    @include('admin.layout.success')
                    @include('admin.layout.errors_request')
                    @include('admin.layout.error')
                </div>

                <div class="panel panel-login">
                    <div class="panel-heading">
                        <hr>
                    </div>

                    <div class="row">
                        <div style="margin-left: 40px;" class="col-md-11 col-md-offset-0">
                            {!! Form::open(['method' => 'post', 'url' => route('users.store')]) !!}
                            <div class="panel with-nav-tabs panel-primary">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1primary" data-toggle="tab">Localisation</a>
                                        </li>
                                        <li><a href="#tab2primary" data-toggle="tab">Information</a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1primary">

                                            <div class="panel panel-login">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <p>Création d'un utilisateurs</p>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">

                                                            <div id="iciPays" class="form-group" style="display: none;">
                                                                {!! Form::label('id_pays', 'pays *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                                                <select id="id_pays" name="id_pays"
                                                                        class="form-control">
                                                                    <option value="">-- Pays --</option>
                                                                </select>
                                                            </div>

                                                            <div id="iciVille" class="form-group"
                                                                 style="display: none;">
                                                                {!! Form::label('id_ville', 'ville *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                                                <select id="id_ville" name="id_ville"
                                                                        class="form-control">
                                                                    <option value="">-- Ville--</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                {!! Form::label('id_role', 'role *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                                                {!! Form::select('id_role', $role, '', ['class'=>'form-control']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2primary">
                                            <div class="form-group">
                                                {!! Form::label('nom', 'nom *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                                {!! Form::text('nom', '', array('class'=>'form-control', 'name'=>'nom', 'placeholder' => 'nom', 'required'=>'required')) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('prenom', 'prenom *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                                {!! Form::text('prenom', '', array('class'=>'form-control', 'name'=>'prenom', 'placeholder' => 'prenom', 'required'=>'required')) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('email', 'email *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                                {!! Form::text('email', '', array('class'=>'form-control', 'name'=>'email', 'placeholder' => 'email', 'required'=>'required')) !!}
                                            </div>

                                            <div id="password" class="form-group" style="display: none;">
                                                {!! Form::label('password', 'password *', array('class' => 'col-md-4 col-md-offset-5 control-label')) !!}
                                                {!! Form::password('password', array('class'=>'form-control', 'name'=>'password', 'placeholder' => 'password', 'required'=>'required')) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <input type="submit" name="submit" id="submit"
                                               class="form-control btn btn-primary" value="CREATE">
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop