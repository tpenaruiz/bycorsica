@extends('admin.layout.home')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Zero Configuration Table -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-shopping-cart fa-2x">&nbsp;</i>Détail de la commande {{$commande[0]->reference}}</h3>
                    </div>
                    <div class="panel-body">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>Media</th>
                                <th>TVA</th>
                                <th>Réference</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Status</th>
                                <th>Cée le:</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Media</th>
                                <th>TVA</th>
                                <th>Réference</th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Status</th>
                                <th>Cée le:</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($commande as $row)
                                @foreach($row->produits as $p)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($p->medias->chemin) }}" alt="{{$p->medias->libelle}}" title="{{$p->medias->libelle}}" height="50">
                                        </td>
                                        <td>{{$p->tva->multiplicate}}</td>
                                        <td>{{$p->reference}}</td>
                                        <td>{{$p->nom}}</td>
                                        <td>{{$p->prix.'€'}}</td>
                                        <td>{{$p->status}}</td>
                                        <td>{{$p->getCreateddateAttribute()}}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop