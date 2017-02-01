/**
 * Created by bilel on 28/01/2017.
 */
// TODO METTRE TOUS LES FONCTIONS AJAX SUR CE FICHIER !!

$(document).ready(function(){
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
     * Au chargement de la vue
     * Vidage de la liste des pays
     * Puis Remplissage de la liste des pays avec France comme pays séléctionné
     */
    let list_pays = $("#country");
    let list_ville = $("#city");
    let url = window.location.href;
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

    /**
     * Au chargement de la vue
     * Vidage de la liste des villes
     * Puis Remplissage de la liste des villes en fonction du pays selectionné
     */
    $.get(url, function(result){
        let value = $("#country option:selected").val();
        list_ville.empty();
        $.each(result.villes, function(){
            if(this.pays.id == value){
                list_ville.append('<option value="' + this.id + '">' + this.libelle + '</option');
            }
        });
    }).error(function(){
        list_ville.append('<option value="">Erreur lors du chargement de la liste </option>');
        console.log("erreur lors du chargement de la liste");
    });

    /**
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

    /**
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


    /**
     * Remove adresse
     */
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




    /**
     * Au chargement de la vue
     * Vidage de la liste des pays
     * Puis Remplissage de la liste des pays
     */
    let id_pays = $("#country").data('pays');
    let id_ville = $("#city").data('ville');
    let list_pays = $("#country");
    let list_ville = $("#city");
    let url = window.location.href;
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

    /**
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

    /**
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

    /**
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


    /**
     * List cadeaux btn remove
     */
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



});