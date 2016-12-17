@extends('front.layout.default')
@section('content')
<div class="container">
    @include('front.blocks.breadcrumbs')

    <div class="row commandeStepThree-heading">
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
                <li class="active">
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

    <div class="row commandeStepThree-content">
        <div class="col-xs-12">
            <p class="libelle">Choisissez une option de livraison pour l'adresse : Mon adresse</p>
        </div>

        {!! Form::open(['method' => 'post', 'url' => route('home')]) !!}
        <div class="col-xs-12">
            <table class="table">
                <tbody>
                    <tr> 
                        <td class="col-xs-1">{!! Form::radio('mode-livraison', '0', true) !!}</td>
                        <td class="col-xs-2"><img class="img-responsive" src="{{ asset('front/img/colissimo.jpg') }}" alt="" title=""></td>
                        <td class="col-xs-6">La Poste - So Colissimo : Choisissez ici entre une livraison à votre domicile ou à une autre adresse de votre choix ou chez un de vos commerçants</td>
                        <td class="col-xs-3">A partir de 5,68 € TTC</td>
                    </tr>
                    <tr>
                        <td class="col-xs-1">{!! Form::radio('mode-livraison', '1', false) !!}</td>
                        <td class="col-xs-2"><img class="img-responsive" src="{{ asset('front/img/colissimo.jpg') }}" alt="" title=""></td>
                        <td class="col-xs-6">La Poste - So Colissimo : Choisissez ici entre une livraison à votre domicile ou à une autre adresse de votre choix ou chez un de vos commerçants</td>
                        <td class="col-xs-3">A partir de 5,68 € TTC</td>
                    </tr>
                    <tr>
                        <td class="col-xs-1">{!! Form::radio('mode-livraison', '2', false) !!}</td>
                        <td class="col-xs-2"><img class="img-responsive" src="{{ asset('front/img/colissimo.jpg') }}" alt="" title=""></td>
                        <td class="col-xs-6">La Poste - So Colissimo : Choisissez ici entre une livraison à votre domicile ou à une autre adresse de votre choix ou chez un de vos commerçants</td>
                        <td class="col-xs-3">A partir de 5,68 € TTC</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-xs-12">                            
            <div class="checkbox">
                <label for="cgv">
                    {!! Form::checkbox('cgv', '1', true) !!}
                    J'ai lu et j'accepte les conditions générales de vente. (Lire les <a href="">Conditions générales de vente)</a>
                </label>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3 text-center">
            {!! Form::submit('Valider!', ['class' => 'btn btn-primary btn-block']) !!}
        </div>
        {!! Form::close() !!}
    </div>  
</div>
@stop