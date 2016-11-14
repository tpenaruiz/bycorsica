@extends('front.layout.home')

@section('content')


<style type="text/css">

	.list-group-horizontal .list-group-item {
	    display: inline-block;
	    background-color: transparent;
	    border-color: transparent;
	    color: white;
	}
	.list-group-horizontal .list-group-item {
		margin-bottom: 0;
		margin-left:-4px;
		margin-right: 0;
	}
	.list-group-horizontal .list-group-item:first-child {
		border-top-right-radius:0;
		border-bottom-left-radius:4px;
	}
	.list-group-horizontal .list-group-item:last-child {
		border-top-right-radius:4px;
		border-bottom-left-radius:0;
	}
</style>

<div class="container">
	<div class="row search-breadcrump">
		<div class="col-md-12">
			<ol class="breadcrumb">
			  	<li><a href="#">Home</a></li>
			  	<li class="active">Recherche</li>
			</ol>
		</div>
	</div>

	<div class="row search-heading"> 	
		<div class="col-md-12 text-center">
			<h3>Recherche <span>"Vin"</span> / <span>10</span> résultat trouvés</h3>
		</div>
	</div>

	<div class="row search-sort">
		<div class="col-md-6">
			<form class="form-inline" role="form">
				<div class="form-group">
                    <label class="filter-col" style="margin-right:0;" for="pref-orderby">Trié par :</label>
                    <select id="pref-orderby" class="form-control">
                        <option>Descendent</option>
                    </select>                                
                </div> <!-- form group [order by] --> 
                <div class="form-group">
                    <label class="filter-col" style="margin-right:0;" for="pref-perpage">Nombre par page :</label>
                    <select id="pref-perpage" class="form-control">
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>                                
                </div> <!-- form group [rows] -->
        	</form>
		</div>
		<div class="col-md-6 text-right">
			<div class="list-group list-group-horizontal">
                <!-- <a href="#" class="list-group-item active">Afficher par : </a>
                <a href="#" class="list-group-item">
                	<div><i class="fa fa-th" aria-hidden="true"></i></div>
                </a>
                <a href="#" class="list-group-item">
                	<div><i class="fa fa-list" aria-hidden="true"></i></div>
                </a> -->

                <!-- Nav tabs -->
				<ul class="nav nav-tabs home-product-tabs" role="tablist">
					<li>test</li>
				  	<li role="presentation" class="active"><a href="#popular" role="tab" data-toggle="tab"><i class="fa fa-th" aria-hidden="true"></i></a></li>
				  	<li role="presentation"><a href="#bestsellers" role="tab" data-toggle="tab"><i class="fa fa-list" aria-hidden="true"></i></a></li>
				</ul>
            </div>
		</div>
	</div>

	<div class="row search-content">	
		<!-- Tab panes -->
		<div class="tab-content home-product-content">
			<div role="tabpanel" class="tab-pane active" id="popular">
				<div class="col-md-3 col-xs-6 product-bloc">
					<div class="product-image">
						<a href=""><img src="{{ asset('front/img/tapenade-noire-olives-noires-apero.jpg') }}" alt="" title=""></a>
					</div>
					<div class="product-description">
						<h3 class="product-title text-center">Tapenade noir</h3>
						<div class="product-libelle">Toute la méditerranée concentrée dans des saveurs délicieuses ...</div>
						<div class="product-price" style="">Prix : 4,43 €</div>
						<div><a href="" class="product-link">Détails</a><a href="" class="product-cart">Ajouter au panier</a></div>
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="bestsellers">
				test bestsellers
			</div>
		</div>		
	</div>
</div>

@stop