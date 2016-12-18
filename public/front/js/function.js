$(document).ready(function(){
    /**
     * Alignement Vertical Modal Bootstrap
     */
    $(window).on('resize', centerModals);
    $(modalVerticalCenterClass).on('show.bs.modal', function(e) {
        centerModals($(this));
    });

    /**
     * Visualisation du compteur purchase en temps réel PHP / JS
     */
    //Parsing du string en Int
    let compteurPurchase = parseInt($('.badge').text());
    // Au clique création de l'événément
    $('.btn_del').on('click', function(e){
        e.preventDefault();
        $('.badge').text(compteurPurchase -1);

        compteurPurchase = compteurPurchase -1;
        if(compteurPurchase === 0){
            $('.toolt_basket').hide();
        }
    });

    /**
     * Add Product For Surprise AJAX
     */
    $('.btn_surpise').on('click', function(e){
        e.preventDefault();
        let row = $(this).parents('tr');
        let id = row.data('id');
        let form = $('#form-add-surprise');
        let url = form.attr('action').replace(':PRODUCT_ID', id);
        let data = form.serialize();

        $.ajax({
            url:url,
            type:'POST',
            data:data,
            success: function(result){
                if(result.message.substring(0, 1) === '1'){
                    // Affichage du message avec lib Notif.js
                    $('#message_info').append(notie.alert(1, result.message.substring(2), 5));
                }else{
                    // Affichage du message avec lib Notif.js
                    $('#message_info').append(notie.alert(2, result.message.substring(2), 5));
                }
            },
            error: function(){
                sweetAlert('Oups...', 'Une erreur est survenue', 'error');
            }
        });
    });

    /**
     * Delete purchase table raw AJAX
     */
    $('.btn_del').on('click', function(e){
        e.preventDefault();
        let row = $(this).parents('tr');
        let id = row.data('id');
        let form = $('#form-del');
        let url = form.attr('action').replace(':PURCHASE_ID', id);
        let data = form.serialize();

        $.ajax({
            url:url,
            type:'POST',
            data:data,
            success: function(result){
                // Efface ligne du tableau
                $('.purchaseLinter_'+id).fadeOut();

                // Affichage du message avec lib Notif.js
                $('#message_info').append(notie.alert(3, result.message, 5));
            },
            error: function(){
                sweetAlert('Oups...', 'Une erreur est survenue', 'error');
            }
        });
    });

    /**
     * Page Produit
     * Button (-) and Button (+)
     * Add or delete quantity
     */
    // On retire -1 au value du input
    $('.del_qte').on('click', function(){
        let newVal = parseInt($('._inputQte').val()) - 1;
        $('._inputQte').val(newVal);
    })

    // On ajoute +1 au value du input
    $('.add_qte').on('click', function(){
        let newVal = parseInt($('._inputQte').val()) +1;
        $('._inputQte').val(newVal);
    })

    /**
     * Page Basket
     * Button (-) and Button (+)
     * Delete or Add Quantity
     */
    // On retire -1 au value du input
    $('.cart_quantity_down').on('click', function(){
        let newVal = parseInt($('.cart_quantity_input').val()) - 1;
        $('.cart_quantity_input').val(newVal);
    })

    // On ajoute +1 au value du input
    $('.cart_quantity_up').on('click', function(){
        let newVal = parseInt($('.cart_quantity_input').val()) +1;
        $('.cart_quantity_input').val(newVal);
    })

    /**
     * Page Basket
     * Input Add Promotion
     * if input empty has Hide Button Submit Validation refresh Page
     */
    if($('#Basket_codePromo').val().length === 0){
        $('.promoBtn').hide();
    }

});

/**
 * Header Icone Panier au survol apparision d'une tooltip + animation
 */
$(document).mouseover(function(e){
    let icoPanier = $('#icoPanierAjax');
    let blockPopHover = $('.tooltip_basket');

    if(icoPanier.has(e.target).length === 1){
        blockPopHover.fadeIn();
    }

    if(blockPopHover.has(e.target).length === 1){
        blockPopHover.fadeIn();
    }

    if(blockPopHover.has(e.target).length === 0 && icoPanier.has(e.target).length === 0){
        blockPopHover.fadeOut();
    }
});

/**
 * Page Basket
 * Input Add Promotion
 * if input empty has Hide Button Submit Validation
 */
function inputPromoKeyPress()
{
    let val = $('#Basket_codePromo').val();

    if(val.length === 0){
        $('.promoBtn').fadeOut();
    }else{
        $('.promoBtn').fadeIn();
    }
}

/**
 * Alignement Vertical Modal Bootstrap
 */
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