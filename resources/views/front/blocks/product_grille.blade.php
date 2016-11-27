<div class="col-md-3 col-xs-6 product-grille">
	<div class="image">
		<a href=""><img src="{{ asset('front/img/tapenade-noire-olives-noires-apero.jpg') }}" alt="" title=""></a>
	</div>
	<div class="description">
		<h3 class="title">Tapenade noir</h3>
		<div class="libelle">Toute la méditerranée concentrée dans des saveurs délicieuses ...</div>
		<div class="price" style="">Prix : 4,43 €</div>
		<div><a href="" class="product-link">Détails</a><a href="" class="cart" data-toggle="modal" data-target="#add_produc_cart">Ajouter au panier</a></div>
	</div>
</div>

<!-- Modal Ajouter au panier-->
<div class="modal fade product-grille-modal" id="add_produc_cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Ajout d'un nouvelle article au panier</h4>
      		</div>
      		<div class="modal-body">
       			<div class="row">
       				<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1"><img src="{{ asset('front/img/tapenade-noire-olives-noires-apero.jpg') }}" class="img-responsive" alt="" title=""></div>
       				<div class="col-md-8 col-sm-8 col-xs-8"><h4>Tapenade Noir - Prix : 23,56 euros</h4></div>
       			</div>
     	 	</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Continuer vos achats</button>
        		<button type="button" class="btn btn-primary">Commander</button>
      		</div>
    	</div>
  	</div>
</div>





<script type="text/javascript">
	var modalVerticalCenterClass = ".modal";
	function centerModals($element) {
	    var $modals;
	    if ($element.length) {
	        $modals = $element;
	    } else {
	        $modals = $(modalVerticalCenterClass + ':visible');
	    }
	    $modals.each( function(i) {
	        var $clone = $(this).clone().css('display', 'block').appendTo('body');
	        var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
	        top = top > 0 ? top : 0;
	        $clone.remove();
	        $(this).find('.modal-content').css("margin-top", top);
	    });
	}
	$(modalVerticalCenterClass).on('show.bs.modal', function(e) {
	    centerModals($(this));
	});
	$(window).on('resize', centerModals);
</script>