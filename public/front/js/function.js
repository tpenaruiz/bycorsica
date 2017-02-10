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
     * Block Product
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
     * Block Header Basket
     * Delete purchase table raw AJAX
     */
    $('.btn_del').on('click', function(e){
        e.preventDefault();
        let row = $(this).parents('tr');
        let id = row.data('id');
        let form = $('#form-del');
        let url = form.attr('action').replace(':PURCHASE_ID', id);
        let data = form.serialize(); 

        let prixttc = parseFloat($(this).parents('tr').data('prixttc'));
        let quantite = parseFloat($(this).parents('tr').data('quantite'));
        let prixtotalttc = parseFloat($('#prixtotalttc').data('prixtotalttc'));
        let newprixtotalttc = Number(Math.round((prixtotalttc - (prixttc*quantite))+'e'+2)+'e-'+2);

        $.ajax({
            url:url,
            type:'POST',
            data:data,
            success: function(result){
                // Efface ligne du tableau
                $('.purchaseLinter_'+id).fadeOut();
                // Mise à jour du prix totat ttc
                $('#prixtotalttc td:last').html(newprixtotalttc);
                $('#prixtotalttc').data('prixtotalttc', newprixtotalttc);

                // Affichage du message avec lib Notif.js
                $('#message_info').append(notie.alert(3, result.message, 5));

                // Efface ligne correspondant au produit concerné dans page Basket
                $('.cart_'+id).fadeOut();
                // Mise à jour du prix dans page Basket
                $('#cart_product_total').html(newprixtotalttc);

                // Affichage d'un message dans tableau si plus de produit
                if(newprixtotalttc==0){
                    $('#purchase').after('<tr><td colspan="6" class="text-center no_product">Aucun produit actuellement dans votre panier</td></tr>');
                }
            },
            error: function(){
                sweetAlert('Oups...', 'Une erreur est survenue', 'error');
            }
        });
    });

    /**
     * Page Home
     * Add product to List Surprise
     */
     $('.btn_surpise_grille_home').on('click', function(e){
        e.preventDefault();
        let row = $(this).parent();
        let id = row.data('id');
        let form = $('#form-add-surprise-grille-home');
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
    })

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
    })

    // On ajoute le produit à la liste de cadeaux
    $('#add_gift').on('click', function(e){
        e.preventDefault();            
        let form = $('#form-add-gift');
        let url = form.attr('action');
        let data = form.serialize();

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
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
     * Page Basket
     * Button (-) and Button (+)
     * Delete or Add Quantity
     */
    // On retire -1 au value du input
    // On met à jour la bdd et le prix
    $('.cart_quantity_down').on('click', function(){
        let row = $(this).parents('tr');
        let idpurchase = row.data('idpurchase');
        let val = parseInt($('#cart_quantity_input_'+idpurchase).val());

        if(val>1){
            // Mise à jour de la quantité dans la vue
            let newVal = val-1;
            $('#cart_quantity_input_'+idpurchase).val(newVal);
            // Mise à jour en bdd de la quantité, et mise à jour de la quantité, du prix total dans la vue
            let form = $('#form-cart-quantite-update-'+idpurchase);
            let url = form.attr('action').replace(':PURCHASE_ID', idpurchase);
            let data = form.serialize();
            
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function(result){
                    // Mise à jour du prix du produit
                    let prixProduitTotalTtc = parseFloat($('#cart_price_'+idpurchase).text())*newVal;
                    let prixProdTotalTtc = Number(Math.round(prixProduitTotalTtc+'e'+2)+'e-'+2);
                    $('#cart_total_'+idpurchase).children().text(prixProdTotalTtc);
                    // Mise à jour du prix total des produits
                    let prixProduitsTotalTtc = parseFloat($('#cart_product_total').children().text())-parseFloat($('#cart_price_'+idpurchase).text());
                    let prixProdsTotalTtc = Number(Math.round(prixProduitsTotalTtc+'e'+2)+'e-'+2);
                    $('#cart_product_total').children().text(prixProdsTotalTtc);
                    // Mise à jour de la quantité et du prix total du Block Header Basket
                    $('#quantite_'+idpurchase).text('X '+newVal);
                    $('#prixtotalttc td:last').html(prixProdsTotalTtc);
                    $('#prixtotalttc').data('prixtotalttc', prixProdsTotalTtc);
                },
                error: function(){
                    sweetAlert('Oups...', 'Une erreur est survenue', 'error');
                }
            })
        }
    })

    // On ajoute +1 au value du input
    // On met a jour la bdd et le prix
    $('.cart_quantity_up').on('click', function(){
        let row = $(this).parents('tr');
        let idpurchase = row.data('idpurchase');
        // Mise à jour de la quantité dans la vue
        let newVal = parseInt($('#cart_quantity_input_'+idpurchase).val()) + 1;
        $('#cart_quantity_input_'+idpurchase).val(newVal);
        // Mise à jour en bdd de la quantité, et mise à jour de la quantité, du prix total dans la vue
        let form = $('#form-cart-quantite-update-'+idpurchase);
        let url = form.attr('action').replace(':PURCHASE_ID', idpurchase);
        let data = form.serialize();

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function(result){
                // Mise à jour du prix du produit                
                let prixProduitTotalTtc = parseFloat($('#cart_price_'+idpurchase).text())*newVal;
                let prixProdTotalTtc = Number(Math.round(prixProduitTotalTtc+'e'+2)+'e-'+2);
                $('#cart_total_'+idpurchase).children().text(prixProdTotalTtc);
                // Mise à jour du prix total des produits
                let prixProduitsTotalTtc = parseFloat($('#cart_product_total').children().text())+parseFloat($('#cart_price_'+idpurchase).text());
                let prixProdsTotalTtc = Number(Math.round(prixProduitsTotalTtc+'e'+2)+'e-'+2);
                $('#cart_product_total').children().text(prixProdsTotalTtc);
                // Mise à jour de la qunatité et du prix total du Block Header Basket
                $('#quantite_'+idpurchase).text('X '+newVal);
                $('#prixtotalttc td:last').html(prixProdsTotalTtc);
                $('#prixtotalttc').data('prixtotalttc', prixProdsTotalTtc);
            },
            error: function(){
                sweetAlert('Oups...', 'Une erreur est survenue', 'error');
            }
        })
    })

    /**
     * Page Basket
     * Button (x)
     * Delete a product
     */
    // On supprime un produit
    $('.cart_quantity_delete').on('click', function(e){
        e.preventDefault();
        let row = $(this).parents('tr');
        let idpurchase = row.data('idpurchase');
        let form = $('#form-cart-delete');
        let url = form.attr('action').replace(':PURCHASE_ID', idpurchase);
        let data = form.serialize();

        $.ajax({
            url:url,
            type:'POST',
            data:data,
            success: function(result){
                // Efface ligne du tableau dans Page Basket
                $('.cart_'+idpurchase).fadeOut();
                // Affichage du message avec lib Notif.js
                $('#message_info').append(notie.alert(3, result.message, 5));

                // Efface ligne du tableau dans block Basket Header
                $('.purchaseLinter_'+idpurchase).fadeOut();
                // Mise à jour du prix dans Page Basket
                let prixProduitsTotalTtc = parseFloat($('#cart_product_total').children().text());
                let prixProduitTotalTtc = parseFloat($('#cart_total_'+idpurchase).children().text());
                prixProduitsTotalTtc = prixProduitsTotalTtc - prixProduitTotalTtc;
                let prixProdsTotalTtc = Number(Math.round(prixProduitsTotalTtc+'e'+2)+'e-'+2);
                $('#cart_product_total').children().text(prixProdsTotalTtc)
                // Mise à jour du prix dans block Basket Header
                $('#prixtotalttc td:last').html(prixProdsTotalTtc);
                $('#prixtotalttc').data('prixtotalttc', prixProdsTotalTtc);

                // Mise à jour de la quantité dans icone Basket
                let compteurPurchase = parseInt($('.badge').text());
                $('.badge').text(compteurPurchase -1);

                // Affichage d'un message dans tableau si plus de produit
                if(prixProdsTotalTtc==0){
                    $('#purchase').after('<tr><td colspan="6" class="text-center no_product">Aucun produit actuellement dans votre panier</td></tr>');
                }
            },
            error: function(){
                sweetAlert('Oups...', 'Une erreur est survenue', 'error');
            }
        });
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