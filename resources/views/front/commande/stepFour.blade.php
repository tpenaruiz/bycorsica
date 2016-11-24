@extends('front.layout.home')
@section('content')
    <div class="container">
        @include('front.blocks.breadcrumbs')

        <div class="row commandeStepFour-heading">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                    <li>
                        <a href="">
                            <h4 class="list-group-item-heading">Etape 1</h4>
                            <p class="list-group-item-text">Connection</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <h4 class="list-group-item-heading">Etapes 2</h4>
                            <p class="list-group-item-text">Adresse</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <h4 class="list-group-item-heading">Etapes 3</h4>
                            <p class="list-group-item-text">Livraison</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="">
                            <h4 class="list-group-item-heading">Etapes 4</h4>
                            <p class="list-group-item-text">Paiement</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row commandeStepFour-content">
            
        </div>
    </div>
@stop