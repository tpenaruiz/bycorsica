/**
 * Created by bilel on 28/01/2017.
 */

class Ajax {

    constructor(){
    }

    /*********************************************************
     *********************************************************
     *                      Account
     * *******************************************************
     ********************************************************/
    account_create_address(){
        let list_pays = $("#country");
        let list_ville = $("#city");
        let url = window.location.href;

        /*
         * Au chargement de la vue
         * Vidage de la liste des pays
         * Puis Remplissage de la liste des pays avec France comme pays séléctionné
         */
        $.get(url, function(result){
            list_pays.empty();
            $.each(result.pays, function(){
                if(this.id != 75){
                    list_pays.append('<option value="' + this.id + '">' + this.nom_fr_fr + '</option>');
                }else{
                    list_pays.append('<option value="' + this.id + '" selected="selected" >' + this.nom_fr_fr + '</option>');
                }
            });
        }).error(function(){
            list_pays.append('<option value="">Erreur lors du chargement de la liste </option>');
            console.log("erreur lors du chargement de la liste");
        });

        /*
         * Au chargement de la vue
         * Vidage de la liste des villes
         * Puis Remplissage de la liste des villes en fonction du pays selectionné
         */
        $.get(url, function(result){
            let value = $("#country option:selected").val();
            list_ville.empty();
            $.each(result.villes, function(){
                if(this.pays.id == value){
                    list_ville.append('<option value="' + this.id + '">' + this.libelle + '</option>');
                }
            });
        }).error(function(){
            list_ville.append('<option value="">Erreur lors du chargement de la liste </option>');
            console.log("erreur lors du chargement de la liste");
        });

        /*
         * Sur l'événement onChange lors du changement de pays
         * Vidage de la liste des villes
         * Puis Remplissage de la liste des villes en fonction du pays selectionné
         * Si aucune ville trouvé pour le pays selectionné message indiquant pas de villes dispos
         */
        $("#country").change(function(){
            let value = $("#country option:selected").val();
            let text = $("#country option:selected").text();

            $("#city").change(function(){
                let content_ville = $("#city option:selected").text();
                if(content_ville == ''){
                    $("#city").append('<option value="">Aucune ville disponible </option>');
                }
            });

            $.get(url, function(data){
                list_ville.empty();
                $.each(data.villes, function(){
                    if(value == ''){
                        list_ville.empty();
                    }else if(this.pays.id == value){
                        list_ville.append('<option id="city" value="' + this.id + '">' + this.libelle + '</option>');
                    }
                });

                $("#city").trigger("change");
            }).error(function(){
                console.log("erreur");
            });
        });

        /*
         * Plug Jquery Validation
         * Validation des données saisies par l'utilisateur
         */
        $("#form_address_create").validate({
            rules: {
                libelle : {
                    required: true
                },
                address_firstname: {
                    required: true,
                },
                address_secondname: {
                    required: true,
                },
                phone:{
                    required: true
                },
                country: {
                    required: true
                },
                city: {
                    required: true
                },
                codepostal: {
                    required: true,
                    number: true
                },
                address: {
                    required: true
                }
            }
        });
    }

    account_delete_address(){
        $(".btn_remove").on('click', function(e){
            e.preventDefault();
            let id = $(this).parents('.adress_details').data('id');
            let form = $('#form_address_destroy');
            let url = form.attr('action').replace(':ID', id);
            let data =form.serialize();
            console.log(url);

            $.ajax({
                url : url,
                type : 'DELETE',
                data : data,
                success: function(result){
                    $('#adress_details_' + result.id).fadeOut();
                    // Affichage du message avec NotieJs
                    $('#message_info').append(notie.alert(3, result.message, 5));
                },
                error: function(){
                    sweetAlert('Oups...', 'Une erreur est survenue', 'error');
                }
            })
        });
    }

    account_edit_address(){
        let id_pays = $("#country").data('pays');
        let id_ville = $("#city").data('ville');
        let list_pays = $("#country");
        let list_ville = $("#city");
        let url = window.location.href;

        /*
         * Au chargement de la vue
         * Vidage de la liste des pays
         * Puis Remplissage de la liste des pays
         */
        $.get(url, function(result){
            list_pays.empty();
            $.each(result.pays, function(){
                if(this.id != id_pays){
                    list_pays.append('<option value="' + this.id + '">' + this.nom_fr_fr + '</option>');
                }else{
                    list_pays.append('<option value="' + this.id + '" selected="selected" >' + this.nom_fr_fr + '</option>');
                }
            });
        }).error(function(){
            list_pays.append('<option value="">Erreur lors du chargement de la liste </option>');
            console.log("erreur lors du chargement de la liste");
        });

        /*
         * Au chargement de la vue
         * Vidage de la liste des villes
         * Puis Remplissage de la liste des villes en fonction du pays selectionné
         */
        $.get(url, function(result){
            let value = $("#country option:selected").val();
            list_ville.empty();
            $.each(result.villes, function(){
                if(this.pays.id == value){
                    if(this.id != id_ville){
                        list_ville.append('<option value="' + this.id + '">' + this.libelle + '</option>');
                    }else{
                        list_ville.append('<option value="' + this.id + '" selected="selected" >' + this.libelle + '</option>');
                    }
                }
            });
        }).error(function(){
            list_ville.append('<option value="">Erreur lors du chargement de la liste </option>');
            console.log("erreur lors du chargement de la liste");
        });

        /*
         * Sur l'événement onChange lors du changement de pays
         * Vidage de la liste des villes
         * Puis Remplissage de la liste des villes en fonction du pays selectionné
         * Si aucune ville trouvé pour le pays selectionné message indiquant pas de villes dispos
         */
        $("#country").change(function(){
            let value = $("#country option:selected").val();
            let text = $("#country option:selected").text();

            $("#city").change(function(){
                let content_ville = $("#city option:selected").text();
                if(content_ville == ''){
                    $("#city").append('<option value="">Aucune ville disponible </option>');
                }
            });

            $.get(url, function(data){
                list_ville.empty();
                $.each(data.villes, function(){
                    if(value == ''){
                        list_ville.empty();
                    }else if(this.pays.id == value){
                        list_ville.append('<option id="city" value="' + this.id + '">' + this.libelle + '</option>');
                    }
                });

                $("#city").trigger("change");
            }).error(function(){
                console.log("erreur");
            });
        });

        /*
         * Plug Jquery Validation
         * Validation des données saisies par l'utilisateur
         */
        $("#form_address_update").validate({
            rules: {
                libelle : {
                    required: true
                },
                address_firstname: {
                    required: true,
                },
                address_secondname: {
                    required: true,
                },
                phone:{
                    required: true
                },
                country: {
                    required: true
                },
                city: {
                    required: true
                },
                codepostal: {
                    required: true,
                    number: true
                },
                address: {
                    required: true
                }
            }
        });
    }

    account_list_cadeaux(){
        $(".btn_remove_liste_cadeaux").on('click', function(e){
            e.preventDefault();
            let id = $(this).parents('.list_cadeaux_detail').data('id');
            let form = $('#form_list_cadeaux_destroy');
            let url = form.attr('action').replace(':ID', id);
            let data =form.serialize();
            console.log(url);

            $.ajax({
                url : url,
                type : 'DELETE',
                data : data,
                success: function(result){
                    $('#list_cadeaux_detail' + id).fadeOut();
                    // Affichage du message avec NotieJs
                    $('#message_info').append(notie.alert(3, result.message_list_cadeaux, 5));
                },
                error: function(){
                    sweetAlert('Oups...', 'Une erreur est survenue', 'error');
                }
            })
        });
    }

    account_validate_form(){
        /**
         * Page account
         * Validation formulaire
         */
        $("#account_infos").validate({
            rules: {
                second_name: {
                    required: true,
                    nowhitespace: true,
                    lettersonly: true
                },
                first_name: {
                    required: true,
                    nowhitespace: true,
                    lettersonly: true
                },
                birthday: {
                    required: true,
                    dateEch: true
                },
                email: {
                    required: true,
                    email: true
                }
            },
            submitHandler: function(form){
                var form = $("#account_infos");
                var url = form.attr('action');
                var data = form.serialize();
                console.log(url);
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    success: function(response){
                        // Affichage du message avec notiJs
                        $('#message_info').append(notie.alert(1, response.status, 5));
                    },
                    error: function(){
                        sweetAlert('Oups...', 'Une erreur est survenue', 'error');
                    }
                });
            }
        });
    }


    /*********************************************************
     *********************************************************
     *                  Produits et Panier
     * *******************************************************
     ********************************************************/
    add_product_for_surpise(){
        /**
         * Block Product_list_category
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
         * Block Product_grille_category
         * Add Product For Surprise AJAX
         */
         $(".btn_surpise_grille_category").on('click', function(e){
            e.preventDefault();
            let row = $(this).parent();
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
        })
    }

    delete_purchase_table_row(){
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

            console.log(url);
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
                        $('.btn_commander').fadeOut();
                    }
                },
                error: function(){
                    sweetAlert('Oups...', 'Une erreur est survenue', 'error');
                }
            });
        });
    }

    add_product_for_list_surprise(){
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
    }

    add_product_for_list_cadeaux(){
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
    }

    basket_remove_quantity(){
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
        });
    }

    basket_add_quantity(){
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
        });
    }

    basket_delete_product(){
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
                        $('.btn_commander').fadeOut();
                    }
                },
                error: function(){
                    sweetAlert('Oups...', 'Une erreur est survenue', 'error');
                }
            });
        });
    }

}