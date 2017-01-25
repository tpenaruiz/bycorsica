@extends('front.layout.default')

@section('content')


<script src="{{ asset('front/ajax/account/address_delete.js') }}"></script>
<script src="{{ asset('front/ajax/account/liste_cadeaux.js') }}"></script>


<div class="container">
	@include('front.blocks.breadcrumbs')

	<div class="row account">
		<div class="col-md-12 title">
			<h3 class="text-center">Gestion de mon compte</h3>	
		</div>
	  	<!-- Nav tabs -->
	  	<ul class="nav nav-tabs" role="tablist">			
	    	<li role="presentation" class="active"><a href="#infos" aria-controls="infos" role="tab" data-toggle="tab">Mes Infos</a></li>
	    	<li role="presentation"><a href="#address" aria-controls="profile" role="tab" data-toggle="tab">Adresses</a></li>
	    	<li role="presentation"><a href="#commandes" aria-controls="commandes" role="tab" data-toggle="tab">Commandes</a></li>
	    	<li role="presentation"><a href="#avoirs" aria-controls="avoirs" role="tab" data-toggle="tab">Avoirs</a></li>
	    	<li role="presentation"><a href="#bonReduction" aria-controls="bonReduction" role="tab" data-toggle="tab">Bon de réducation</a></li>
	    	<li role="presentation"><a href="#retourProduit" aria-controls="retourProduit" role="tab" data-toggle="tab">Retour Produits</a></li>
	    	<li role="presentation"><a href="#mesListe" aria-controls="mesListe" role="tab" data-toggle="tab">Mes Listes</a></li>
	    	<li role="presentation"><a href="#listCadeaux" aria-controls="listCadeaux" role="tab" data-toggle="tab">Mes Listes de cadeaux</a></li>
	  	</ul>

	  	<!-- Tab panes -->
	  	<div class="tab-content">
	  		<!-- Debut Panel Info -->
	    	@include('front.account.info')

	    	<!-- Debut Panel Adresse -->
	    	@include('front.account.adresse')

			<!-- Début Panel commandes -->
			@include('front.account.commande')

			<!-- Début Panel avoirs -->
			@include('front.account.avoir')

			<!-- Début Panel bon réduction -->
			@include('front.account.bonReduction')

			<!-- Début Panel retour produit -->
			@include('front.account.retourProduit')

			<!-- Début Panel mes listes -->
			@include('front.account.mesListe')

			<!-- Début Panel mes listes cadeaux -->
			@include('front.account.mesListeCadeaux')

	  	</div>
	</div>
</div>

@stop