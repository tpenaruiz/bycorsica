@extends('front.layout.default')

@section('content')

<div class="container">
	@include('front.blocks.breadcrumbs')
	
	<div class="row category-heading">
		<div class="col-md-2 col-md-offset-1">
			<img src="{{ asset('front/img/tapenade-noire-olives-noires-apero.jpg') }}">
		</div>
		<div class="col-md-9">
			<div class="title">
				<h3>Biscuits et Gateaux</h3>
			</div>
			<div class="description">
				<p>
					Que seraient les goûters corse sans cette petite touche de sucrée, si emblématique de l’ile !
					On les appelle Canistrelli, Finuchjetti, Frappes… se décline à l infini pour vous faire découvrir toutes la douceur et la gourmandise de la corse.
				</p>
			</div>
		</div>
	</div>

	<div class="row category-sort">
		@include('front.blocks.product_sort')
	</div>

	<div class="row category-content">
		<!-- Tab panes -->
		<div class="tab-content home-product-content">
			<div role="tabpanel" class="tab-pane active" id="grille">
				@include('front.blocks.product_grille')
				@include('front.blocks.product_grille')
				@include('front.blocks.product_grille')
				@include('front.blocks.product_grille')
				@include('front.blocks.product_grille')
				@include('front.blocks.product_grille')
				@include('front.blocks.product_grille')
				@include('front.blocks.product_grille')
			</div>

			<div role="tabpanel" class="tab-pane" id="liste">
				<div class="col-md-10 col-md-offset-1">
					@include('front.blocks.product_liste')
					@include('front.blocks.product_liste')
					@include('front.blocks.product_liste')
					@include('front.blocks.product_liste')
					@include('front.blocks.product_liste')
					@include('front.blocks.product_liste')
					@include('front.blocks.product_liste')
					@include('front.blocks.product_liste')
				</div>		
			</div>
		</div>
	</div>

	@include('front.blocks.product_pagination') 
</div>

@stop