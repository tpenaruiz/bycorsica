$(document).ready(function(){
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

    /**
     * Header Icone Panier au survol apparision d'une tooltip + animation
     */
    $('#basket').on('mouseover', function(){
        $('.tooltip_basket').toggle();
    });

    $('#basket').on('mouseout', function () {
        $('.tooltip_basket').toggle();
    });
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

