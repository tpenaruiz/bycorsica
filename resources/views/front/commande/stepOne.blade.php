@extends('front.layout.home')
@section('content')
    <script src="{{asset('front/js/stepCommande.js')}}"></script>
    <div class="container">
        @include('front.blocks.breadcrumbs')

        <div class="row commandeStepOne">
            <div class="panel">
                <div class="panel-heading">
                    <div class="col-xs-12">
                        <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                            <li class="active">
                                <a href="">
                                    <h4 class="list-group-item-heading">Etape 1</h4>
                                    <p class="list-group-item-text">Connection</p>
                                </a>
                            </li>
                            <li class="disabled">
                                <a href="">
                                    <h4 class="list-group-item-heading">Etapes 2</h4>
                                    <p class="list-group-item-text">Adresse</p>
                                </a>
                            </li>
                            <li class="disabled">
                                <a href="">
                                    <h4 class="list-group-item-heading">Etapes 3</h4>
                                    <p class="list-group-item-text">Livraison</p>
                                </a>
                            </li>
                            <li class="disabled">
                                <a href="">
                                    <h4 class="list-group-item-heading">Etapes 4</h4>
                                    <p class="list-group-item-text">Paiement</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">

                    <div class="row commandeStepOne">
                        <div class="col-xs-12">
                            <div class="col-md-5 col-md-offset-0 col-sm-5 col-sm-offset-0 col-xs-10 col-xs-offset-1 commande_login">
                                <br>
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center">Connection</h3>
                                </div>
                                <hr>
                                <form>
                                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="email">Adresse Email</label>
                                            <input type="email" class="form-control input-sm" id="email" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control input-sm" id="password"
                                                   placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-6 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
                                            <input type="submit" class="btn btn-primary btn-block" value="Connection"/>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-10 col-xs-offset-1 commande_registration">
                                <br>
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center">Créer votre compte</h3>
                                </div>
                                <hr>
                                <form>
                                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="secondname">Prénom * </label>
                                            <input type="text" class="form-control input-sm" id="secondname"
                                                   placeholder="">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="firstname">Nom * </label>
                                            <input type="text" class="form-control input-sm" id="firstname"
                                                   placeholder="">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="email">Adresse Email * </label>
                                            <input type="text" class="form-control input-sm" id="email" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="password">Password * </label>
                                            <input type="password" class="form-control input-sm" id="password"
                                                   placeholder="">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="re-password">Confirmation Password * </label>
                                            <input type="password" class="form-control input-sm" id="re-password"
                                                   placeholder="">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12">
                                            <div class="checkbox">
                                                <label for="newsletter">
                                                    <input type="checkbox" class="newsletter" name="newsletter"
                                                           id="newsletter" value="1">
                                                    S'inscrire à la newsletter
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12">
                                            <div class="checkbox">
                                                <label for="offers">
                                                    <input type="checkbox" class="offers" name="offers" id="offers"
                                                           value="1">
                                                    Recevez les offres spéciales de nos partenaires
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group col-md-offset-3 col-md-3 col-sm-offset-3 col-sm-3 col-xs-6">
                                            <input type="submit" class="btn btn-primary btn-block pull-right"
                                                   value="Annuler"/>
                                        </div>
                                        <div class="form-group col-md-3 col-sm-3 col-xs-6">
                                            <input type="submit" class="btn btn-primary btn-block" value="Valider"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop