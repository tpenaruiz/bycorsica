<nav class="navbar navbar-inverse navbar-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">By Corsica</a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-truck" aria-hidden="true"></i> Livraison <span class="sr-only">(current)</span></a></li>
                <li><a href="{{ url('contact') }}"><i class="fa fa-phone" aria-hidden="true"></i> Contactez-nous</a></li>
            </ul>
            {!! Form::open(['method' => 'post', 'url' => route('searchPost.searchEngine'), 'class' => 'navbar-form navbar-left']) !!}
                <div class="input-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Recherchez un produit ...">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span>
                </div><!-- /input-group -->
            {!! Form::close() !!}
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    @if(Auth::check())
                    <a href="{{ url('account') }}" class="myaccount">Mon Compte</a><a href="{{ url('logout') }}" class="logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>                    
                    @else
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="login-deconnect">Mon Compte <span class="caret"></span></a>
                    <ul class="dropdown-menu" id="login-dp">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::open(['role' => 'form', 'class'=> 'form', 'id' => 'login_nav', 'method' => 'post',  'url' => '/login']) !!}    
                                        {{ csrf_field() }}

                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            {!! Form::label('email', 'Email address', ['class' => 'sr-only']) !!}
                                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email addresse', 'required' => 'required']) !!}                                   
                                        
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                            {!! Form::label('password', 'Password', ['class' => 'sr-only']) !!}
                                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) !!}
                                    
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block text-right"><a href="{{ url('/password/reset') }}">Mot de passe oublié ?</a></div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::submit('Se connecter', ['class' => 'btn btn-primary btn-block']) !!}
                                        </div>
                                        <div class="checkbox">
                                            <label for="newsletter">
                                                {!! Form::checkbox('remember', '1', true) !!}
                                                Se souvenir de moi
                                            </label>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                                <div class="bottom text-center">
                                    <a href="{{ url('/register') }}">Créer votre compte</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @endif
                </li>

                <!-- Panier au survol faire apparaitre une tooltip -->
                <li id="icoPanierAjax"><a href="{{ url('/basket') }}">{{Lang::get('general.basket')}}<span class="badge">{{count($myPurchase)}}</span></a></li>

                @if(count($myPurchase) > 0)
                    <div class="toolt_basket">
                        <div class="tooltip_basket">
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <tbody>
                                        @foreach($myPurchase as $row)
                                            <tr class="purchaseLinter_{{$row->idPurchase}}" data-id="{{$row->idPurchase}}" data-prixttc = "{{$row->prixttc}}">
                                                <td class="image"><a href=""><img src="{{ asset($row->chemin) }}" alt="{{$row->mediaLibelle}}" title="{{$row->mediaLibelle}}"></a></td>
                                                <td>
                                                    <div>{{$row->produitNom}}</div>
                                                    <div>{{$row->prixttc}} &euro;</div>
                                                </td>
                                                <td>
                                                    <span>X {{$row->quantite}}</span>
                                                </td>
                                                {!! Form::open(['route'=>['myPurchase.destroy', ':PURCHASE_ID'], 'method' => 'DEL', 'id' => 'form-del']) !!}
                                                    <td>
                                                        <a href="#" class="btn_del">
                                                            <i class="delete_purchase fa fa-trash-o fa-2x" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                {!! Form::close() !!}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <tbody>
                                        <tr id="prixtotalttc" data-prixtotalttc="{{ $myPurchasePriceTTC->prixtotalttc }}"> 
                                            <td style="text-align: right; border: 0px">Total de la commande :</td>
                                            <td style="text-align: left; border: 0px">{{ $myPurchasePriceTTC->prixtotalttc }} euros</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-3 text-center">
            <img src="{{ asset('front/img/logo_big.jpeg') }}" style="width: 200px">
        </div>
        <div class="col-md-9">
            <nav class="main-nav" role="navigation">
                <!-- Mobile menu toggle button (hamburger/x icon) -->
                <input id="main-menu-state" type="checkbox" />
                <label class="main-menu-btn" for="main-menu-state">
                    <span class="main-menu-btn-icon"></span> Toggle main menu visibility
                </label>

                <!-- <h2 class="nav-brand"><a href="#">Brand</a></h2> -->

                <!-- Sample menu definition -->
                <ul id="main-menu" class="sm sm-blue">
                    @foreach($categories as $x)
                        <li class="has-mega-menu">
                            <a href="#">{{$x->libelle}}</a>
                            <ul class="mega-menu">
                                <li>
                                    @foreach($souscategories as $y)
                                        @if($y->id_categorie === $x->id)
                                            <div class="column-1-3 text-center">
                                                <span>{{$y->libelle}}</span>
                                                <a href="{{route('sousCategory', $y->id)}}">
                                                    <div class="mega-menu-sample-image">
                                                        <img src="{{asset($y->medias->chemin)}}">
                                                    </div>
                                                </a>
                                                <ul> <!-- TODO Doit t'on faire ça, personnelement POURQUOI FAIRE, sinon c'est simple faut rajouter une table la liée avec sousCategorie et mettre les même champs -->
                                                    <li><a href="#">Rouge</a></li>
                                                    <li><a href="#">Rosé</a></li>
                                                    <li><a href="#">Blanc</a></li>
                                                    <li><a href="#">Muscat</a></li>
                                                </ul>
                                            </div>
                                        @endif
                                    @endforeach
                                </li>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</div>