// Visualisations des status via Ajax
$(document).ready(function(){
    var url = window.location.href;

    $.get(url, function(result){
        $.each(result.info, function(){
            if(this.status == 'Archivé'){
                $('#innactif_'+this.id).hide();
                $('#actif_'+this.id).toggle();
            }else if(this.status == "Actif"){
                $('#actif_'+this.id).hide();
                $('#innactif_'+this.id).toggle();
            }
        });
    }).fail(function(){
        sweetAlert('Oups...', 'Une erreur est survenue', 'error');
    });
});

// Rendre Innactif un status
$(document).ready(function(){
    $('.btn_innactif').click(function(e){
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-innactif');
        var url = form.attr('action').replace(':USERS_ID', id);
        var data = form.serialize();

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function(result){
                console.log(result);
                $.each(result.info, function(){
                    $('#innactif_'+this.id).toggle();
                    $('#actif_'+this.id).toggle();
                });
            },
            error: function(){
                sweetAlert('Oups...', 'Une erreur est survenue', 'error');
            }
        });
    });
});

// Rendre Actif un status
$(document).ready(function(){
    $('.btn_actif').click(function(e){
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-actif');
        var url = form.attr('action').replace(':USERS_ID', id);
        var data = form.serialize();

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function(result){
                console.log(result);
                $.each(result.info, function(){
                    $('#actif_'+this.id).toggle();
                    $('#innactif_'+this.id).toggle();
                });
            },
            error: function(){
                sweetAlert('Oups...', 'Une erreur est survenue', 'error');
            }
        });
    });
});

// Suppression d'un éléments
$(document).ready(function(){
    $('.btn_del').click(function(e){
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-del');
        var url = form.attr('action').replace(':USERS_ID', id);
        var data = form.serialize();

        $.ajax({
            url: url,
            type: 'DELETE',
            data: data,
            success: function(result){
                // Efface la ligne tr compléte
                $('.usersLinter_'+id).fadeOut();

                // Affichage du message avec notiJs
                $('#message_info').append(notie.alert(1, result.message, 5));
            },
            error: function(){
                sweetAlert('Oups...', 'Une erreur est survenue', 'error');
            }
        });
    });
});




