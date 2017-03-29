@extends('admin.layout.home')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Gestion User</h2>

            <!-- Zero Configuration Table -->
            <div class="panel panel-default">
                <div class="panel-heading">Liste utilisateurs</div>
                <div class="panel-body">
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>role</th>
                            <th>ville</th>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>email</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>role</th>
                            <th>ville</th>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>email</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($user as $row)
                            <tr id="user" class="user_{{$row->id}}" data-id="{{$row->id}}">
                                <td>{{$row->roles->libelle}}</td>
                                <td>{{$row->villes->libelle}}</td>
                                <td>{{$row->nom}}</td>
                                <td>{{$row->prenom}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->getCreateddateAttribute()}}</td>

                                <td>
                                    <!-- Action -->
                                    <a href="#" class="user_eyes"><i class="fa fa-eye fa-2x"></i></a>

                                    {!! Form::open(['route'=>['user.destroy', ':USER_ID'], 'method' => 'DEL', 'id' => 'form-user-delete']) !!}
                                        <a class="user_delete"><i class="fa fa-trash fa-2x"></i></a>
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