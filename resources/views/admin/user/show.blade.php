@extends('admin.layout.home')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Information {{$user->prenom.'.'.substr($user->nom, 0, 1)}}</h2>

            <!-- Information utilisateur -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user fa-2x">&nbsp;</i>information général</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <p>Nom</p>
                            <p>Prenom</p>
                            <p>Pays et Ville</p>
                            <p>Email</p>
                            <p>Date de naissance</p>
                            <p>Status</p>
                            <p>Dernière connexion</p>
                            <p>Rôle</p>
                            <p>Crée le </p>
                        </div>

                        <div class="col-md-6">
                            <p>{{$user->nom === null ? 'NULL' : $user->nom}}</p>
                            <p>{{$user->prenom === null ? 'NULL' : $user->prenom}}</p>
                            <p>{{$user->villes->libelle === null ? 'NULL' : $user->villes->libelle}} - {{$pays->nom_fr_fr === null ? 'NULL' : $pays->nom_fr_fr}}</p>
                            <p>{{$user->email === null ? 'NULL' : $user->email}}</p>
                            <p>{{$user->date_naissance === null ? 'NULL' : $user->date_naissance}}</p>
                            <p>{{$user->status === null ? 'NULL' : $user->status}}</p>
                            <p>{{$user->derniere_connexion === null ? 'NULL' : $user->derniere_connexion}}</p>
                            <p>{{$user->roles->libelle === null ? 'NULL' : $user->roles->libelle}}</p>
                            <p>{{$user->created_at === null ? 'NULL' : $user->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Adresse utilisateur -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-book fa-2x">&nbsp;</i>Adresse</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <p>Code postal</p>
                            <p>Adresse</p>
                            <p>Adresse suppl</p>
                            <p>Telephone</p>
                            <p>Portable</p>
                        </div>

                        <div class="col-md-6">
                            <p>{{$adresse->code_postal === null ? 'NULL' : $adresse->code_postal}}</p>
                            <p>{{$adresse->adresse === null ? 'NULL' : $adresse->adresse}}</p>
                            <p>{{$adresse->adresse_suppl === null ? 'NULL' : $adresse->adresse_suppl}}</p>
                            <p>{{$adresse->telephone === null ? 'NULL' : $adresse->telephone}}</p>
                            <p>{{$adresse->telephone2 === null ? 'NULL' : $adresse->telephone2}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Commande et Paiement -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-shopping-cart fa-2x">&nbsp;</i>Commande et paiement</h3>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>
                                    Produit
                                </th>
                                <th>
                                    Prix
                                </th>
                                <th>
                                    Status
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="active">
                                <td>
                                    MacBook
                                </td>
                                <td>
                                    2800€
                                </td>
                                <td>
                                    Success
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- TOTAL -->
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-calculator fa-2x">&nbsp;</i>Total</h3>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>
                                    TTC
                                </th>
                                <th>
                                    TOTAL
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="active">
                                <td>
                                    1903€
                                </td>
                                <td>
                                    2903€
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@stop