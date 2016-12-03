@extends('front.layout.default')

@section('content')

<div class="container">
	@include('front.blocks.breadcrumbs')

	<div class="row search-heading"> 	
		<div class="col-md-12 text-center">
			<h3>Recherche <span>"{{$inputSearch}}"</span> - <span>{{count($searchEngine)}}</span> résultat trouvés</h3>
		</div>
	</div>

	<div class="row search-sort">
		@include('front.blocks.product_sort')
	</div>

	<div class="row search-content">
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