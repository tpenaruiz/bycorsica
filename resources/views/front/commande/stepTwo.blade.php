@extends('front.layout.home')
@section('content')
    <script src="{{asset('front/js/stepCommande.js')}}"></script>
    <div class="container">
        @include('front.blocks.breadcrumbs')

        <div class="row commandeStepTwo">
            <div class="panel">
                <div class="panel-heading">
                    <div class="col-xs-12">
                        <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                            <li class="">
                                <a href="">
                                    <h4 class="list-group-item-heading">Etape 1</h4>
                                    <p class="list-group-item-text">Connection</p>
                                </a>
                            </li>
                            <li class="active">
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

                    <div class="row commandeStepTwo">
                        <div class="col-xs-12">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Adresses</h3>
                                <br>
                            </div>
                            <form>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 commandeAdresseSelected">
                                        <h3>Vos adresses :</h3>
                                        <form>
                                            <div class="form-group col-md-3 col-sm-3">
                                                <input type="radio" class="" name="adresse1">
                                            </div>
                                            <div class="form-group col-md-9 col-sm-9">
                                                <span>Paris</span>
                                                <span>9 rue des cuilleres</span>
                                                <span>75678, France</span>
                                            </div>

                                            <div class="form-group col-md-3 col-sm-3">
                                                <input type="radio" class="" name="adresse1">
                                            </div>
                                            <div class="form-group col-md-9 col-sm-9">
                                                <span>Paris</span>
                                                <span>9 rue des cuilleres</span>
                                                <span>75678, France</span>
                                            </div>

                                            <div class="form-group col-md-3 col-sm-3">
                                                <input type="radio" class="" name="adresse1">
                                            </div>
                                            <div class="form-group col-md-9 col-sm-9">
                                                <span>Paris</span>
                                                <span>9 rue des cuilleres</span>
                                                <span>75678, France</span>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-md-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 commandeAdresse">
                                        <h3>Ou souhaitez-vous être livrer ?</h3>
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="secondname">Prénom *	</label>
                                            <input type="text" class="form-control input-sm" id="prenom" name="prenom" placeholder="">
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="firstname">Nom *	</label>
                                            <input type="text" class="form-control input-sm" id="nom" name="nom" placeholder="">
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="email">Société *	</label>
                                            <input type="text" class="form-control input-sm" id="societe" name="societe" placeholder="">
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="secondname">Adresse *	</label>
                                            <input type="text" class="form-control input-sm" id="adresse" name="adresse" placeholder="">
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="firstname">Adresse Supplémentaire *	</label>
                                            <textarea class="form-control input-sm" name="adresseSupp" id="adresseSupp" cols="30" rows="10">Adresse supplémentaires</textarea>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="email">Code Postal *	</label>
                                            <input type="number" class="form-control input-sm" id="codePostal" name="codePostal" placeholder="">
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="secondname">Pays *	</label>
                                            <select class="form-control input-sm" name="pays" id="pays">
                                                <option value="Paris">France</option>
                                                <option value="Paris">Etas-Unis</option>
                                                <option value="Paris">Anglettere</option>
                                                <option value="Paris">Chine</option>
                                                <option value="Paris">Brazil</option>
                                                <option value="Paris">Espagne</option>
                                                <option value="Paris">Allemagne</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="firstname">Ville *	</label>
                                            <select class="form-control input-sm" name="ville" id="ville">
                                                <option value="Paris">Paris</option>
                                                <option value="Paris">Dijon</option>
                                                <option value="Paris">Lyon</option>
                                                <option value="Paris">Marseille</option>
                                                <option value="Paris">Vincennes</option>
                                                <option value="Paris">Lille</option>
                                                <option value="Paris">Monaco</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="email">Téléphone Fixe *	</label>
                                            <input type="number" class="form-control input-sm" id="telephoneF" name="telephoneF" placeholder="">
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="email">Téléphone Mobile *	</label>
                                            <input type="number" class="form-control input-sm" id="telephoneM" name="telephoneM" placeholder="">
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="email">Information Supplémentaires *	</label>
                                            <textarea class="form-control input-sm" name="information" id="information" cols="30" rows="10">Vos Informations</textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-6" >
                                                <input type="submit" class="btn btn-primary btn-block pull-right" value="Annuler"/>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-6" >
                                                <input type="submit" class="btn btn-primary btn-block" value="Valider"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop