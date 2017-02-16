/*********************************************************
 *********************************************************
 *           Send Class Ajax And Call Method
 * *******************************************************
 ********************************************************/
$(document).ready(function () {
    let ajax = new Ajax();
    ajax.account_create_address();
    ajax.account_delete_address();
    ajax.account_edit_address();
    ajax.account_list_cadeaux();
    ajax.add_product_for_list_cadeaux();
    ajax.add_product_for_list_surprise();
    ajax.add_product_for_surpise();
    ajax.basket_add_quantity();
    ajax.basket_delete_product();
    ajax.basket_remove_quantity();
    ajax.delete_purchase_table_row();
});


/*********************************************************
 *********************************************************
 *           Function Js / jQuery For Browser
 * *******************************************************
 ********************************************************/
$(document).ready(function(){
    /**
     * Alignement Vertical Modal Bootstrap
     */
    $(window).on('resize', centerModals);
    $(modalVerticalCenterClass).on('show.bs.modal', function(e) {
        centerModals($(this));
    });

    /**
     * Page Account
     * Jquery UI datepicker
     */
    $( "#birthday" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:-10",
        dateFormat: "dd-mm-yy"
    });

    /**
     * Block Header Basket
     * Visualisation du compteur purchase en temps réel
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
     * Page Produit
     * Button (-) and Button (+)
     * Add or delete quantity
     * Add product to list for surprise
     */
    // On retire -1 au value du input
    $('.del_qte').on('click', function(){
        let val = parseInt($('._inputQte').val());
        if (val>1) {
            let newVal = val - 1;
            // Calcul du nouveau prix
            let prix = parseFloat($('.price').data('price'));
            let newPrix = (prix/val)*newVal;
            let newPrixFinal = Number(Math.round(newPrix+'e'+2)+'e-'+2);
            // Update quantité, prix et data-price
            $('._inputQte').val(newVal);
            $('.price span').html(newPrixFinal);
            $('.price').data('price', newPrixFinal);
            $('#modal_qte_redirectHome').val(newVal);
            $('#modal_qte_redirectBasket').val(newVal);
        }
    });

    // On ajoute +1 au value du input
    $('.add_qte').on('click', function(){
        let val = parseInt($('._inputQte').val());
        let newVal = val + 1;
        // Calcul du nouveau prix
        let prix = parseFloat($('.price').data('price'));
        let newPrix = (prix/val)*newVal;
        let newPrixFinal = Number(Math.round(newPrix+'e'+2)+'e-'+2);
        // Update quantité, prix et data-price
        $('._inputQte').val(newVal);
        $('.price span').html(newPrixFinal);
        $('.price').data('price', newPrixFinal);
        $('#modal_qte_redirectHome').val(newVal);
        $('#modal_qte_redirectBasket').val(newVal);
    });

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