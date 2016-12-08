@extends('front.layout.default')

@section('content')

<div class="container">
	@include('front.blocks.breadcrumbs')

	<div class="row search-heading"> 	
		<div class="col-md-12 text-center">
			<h3>{{Lang::get('general.search')}} <span>"{{$inputSearch}}"</span> - <span>{{count($searchEngine)}}</span> {{Lang::get('general.findResult')}}</h3>
		</div>
	</div>

	<div class="row search-sort">
		@include('front.blocks.product_sort')
	</div>

	<div class="row search-content">
		<!-- Tab panes -->
		<div class="tab-content home-product-content">
			<div role="tabpanel" class="tab-pane active" id="grille">
				@foreach($searchEngine as $row)
					@include('front.blocks.product_grille')
				@endforeach
			</div>

			<div role="tabpanel" class="tab-pane" id="liste">
				<div class="col-md-10 col-md-offset-1">
					@foreach($searchEngine as $row)
						@include('front.blocks.product_liste')
					@endforeach
				</div>		
			</div>
		</div>	
	</div>

	<div class="row product-pagination">
		<div class="col-md-3 col-sm-3">
		</div>
		<div class="col-md-6  col-sm-6 text-center">
			<div class="paginate">
				{!! $searchEngine->render() !!}
			</div>
		</div>
	</div>
</div>

@stop