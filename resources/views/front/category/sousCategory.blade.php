@extends('front.layout.default')

@section('content')

<div class="container">
	@include('front.blocks.breadcrumbs')

	<div class="row category-heading">
		<div class="col-md-2 col-md-offset-1">
			@if($data->total() != 0)
				<img src="{{ asset($data[0]->medias->chemin) }}">
			@endif
		</div>
		<div class="col-md-9">
			<div class="title">
				@if($data->total() != 0)
					<h3>{{$data[0]->sousCategories->libelle}}</h3>
				@endif
			</div>
			<div class="description">
				@if($data->total() != 0)
					@if(strlen($data[0]->sousCategories->description) === 0 || $data[0]->sousCategories->description === NULL)
						<p>
							{{\Lang::get('general.sousCategorieDescNull')}}
						</p>
					@else
						<p>
							{{$data[0]->sousCategories->description}}
						</p>
					@endif
				@endif
			</div>
		</div>
	</div>

	@if($data->total() != 0)
		<div class="row category-sort">
			@include('front.blocks.product_sort')
		</div>
	@endif

	<div class="row category-content">
		<!-- Tab panes -->
		<div class="tab-content home-product-content">
			<div role="tabpanel" class="tab-pane active" id="grille">
				@include('front.blocks.product_grille_sousCategory')
			</div>

			<div role="tabpanel" class="tab-pane" id="liste">
				<div class="col-md-10 col-md-offset-1">
					@include('front.blocks.product_liste_sousCategory')
				</div>		
			</div>
		</div>
	</div>

	@include('front.blocks.product_pagination') 
</div>

@stop