@extends('front.layout.home')

@section('content')
	<div class="container">
		<div class="row">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  	<ol class="carousel-indicators">
			    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			    	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			  	</ol>

			  	<!-- Wrapper for slides -->
			  	<div class="carousel-inner" role="listbox">
			    	<div class="item active">
			      		<img src="{{ asset('front/img/homeslider/slider_01.jpg') }}" alt="...">
			    	</div>
			    	<div class="item">
			      		<img src="{{ asset('front/img/homeslider/slider_02.jpg') }}" alt="...">
			    	</div>
			    	<div class="item">
			      		<img src="{{ asset('front/img/homeslider/slider_03.jpg') }}" alt="...">
			    	</div>
			    	<div class="item">
			      		<img src="{{ asset('front/img/homeslider/slider_04.jpg') }}" alt="...">
			    	</div>
			  	</div>

			  	<!-- Controls -->
			  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			  	</a>
			  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
			</div>
		</div>

		<div class="row separation"></div>

		<div class="row home-category">
			<div class="col-xs-4 bloc">
				<a href="#">
					<div><img src="{{ asset('front/img/category_01.jpg') }}"></div>
					<div class="libelle">CAVE</div>
				</a>
			</div>
			<div class="col-xs-4 bloc">
				<a href="#">
					<div><img src="{{ asset('front/img/category_02.jpg') }}"></div>
					<div class="libelle">ÉPICERIE FINE</div>
				</a>
			</div>
			<div class="col-xs-4 bloc">
				<a href="#">
					<div><img src="{{ asset('front/img/category_03.jpg') }}"></div>
					<div class="libelle">CHARCUTERIE & FROMAGES</div>
				</a>
			</div>
			<div class="col-xs-4 bloc">
				<a href="#">
					<div><img src="{{ asset('front/img/category_04.jpg') }}"></div>
					<div class="libelle">SOINS & RITUELS DE BEAUTÉ</div>
				</a>
			</div>
			<div class="col-xs-4 bloc">
				<div><img src="{{ asset('front/img/category_05.jpg') }}"></div>
				<div class="libelle">BY CORSICA</div>
			</div>
			<div class="col-xs-4 bloc">
				<div><img src="{{ asset('front/img/category_06.jpg') }}"></div>
				<div class="libelle">L'ART D'OFFRIR</div>
			</div>
		</div>

		<div class="row home-product">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs home-product-tabs" role="tablist">
			  	<li role="presentation" class="active"><h4><a href="#popular" role="tab" data-toggle="tab">POPULAIRE</a></h4></li>
			  	<li role="presentation"><h4><a href="#bestsellers" role="tab" data-toggle="tab">MEILLEURES VENTES</a></h4></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content home-product-content">
				<div role="tabpanel" class="tab-pane active" id="popular">
					@include('front.blocks.product_grille')
					@include('front.blocks.product_grille')
					@include('front.blocks.product_grille')
					@include('front.blocks.product_grille')
					@include('front.blocks.product_grille')
					@include('front.blocks.product_grille')
					@include('front.blocks.product_grille')
					@include('front.blocks.product_grille')
				</div>
				<div role="tabpanel" class="tab-pane" id="bestsellers">
					Bestsellers
				</div>
			</div>
		</div>
	</div>
@stop