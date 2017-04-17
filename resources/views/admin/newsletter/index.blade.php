@extends('admin.layout.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <h2 class="page-title">Gestion Newsletter</h2>

                <!-- Zero Configuration Table -->
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des newsletter</div>
                    <div class="panel-body">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>Email</th>
                                <th>Status</th>
                                <th>crée le:</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Email</th>
                                <th>Status</th>
                                <th>crée le:</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($newsletter as $row)
                                <tr id="newsletter" class="newsletter_{{$row->id}}" data-id="{{$row->id}}">
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->status}}</td>
                                    <td>{{$row->getCreateddateAttribute()}}</td>

                                    <td>
                                        <!-- Action -->
                                        {!! Form::open(['route'=>['newsletter.archive', ':NEWSLETTER_ID'], 'method' => 'DEL', 'id' => 'form-newsletter-delete']) !!}
                                        <a class="ico_delete newsletter_delete"><i class="fa fa-trash fa-2x"></i></a>
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