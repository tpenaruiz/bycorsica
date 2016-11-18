@extends('front.layout.home')

@section('content')

<div class="container">
	<div class="row user"> 	
		<div class="col-md-12">	
		  	<!-- Nav tabs -->
		  	<ul class="nav nav-tabs" role="tablist">			
		    	<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mes Infos</a></li>
		    	<li role="presentation"><a href="#address" aria-controls="profile" role="tab" data-toggle="tab">Adresses</a></li>
		    	<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Commandes</a></li>
		    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Avoirs</a></li>
		    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Bon de réducation</a></li>
		    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Retour Produits</a></li>
		    	<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Mes Listes</a></li>
		  	</ul>

		  	<!-- Tab panes -->
		  	<div class="tab-content">
		    	<div role="tabpanel" class="tab-pane active" id="home">...</div>
		    	<div role="tabpanel" class="tab-pane" id="address">...</div>
		    	<div role="tabpanel" class="tab-pane" id="messages">...</div>
		    	<div role="tabpanel" class="tab-pane" id="settings">...</div>
		  	</div>
		</div>
	</div>
</div>

@stop