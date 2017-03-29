/**
 * Created by bilel on 26/03/2017.
 */

class Ajax {

    constructor(){
    }





    delete_user_row(){
        $('.user_delete').on('click', function(e){
            e.preventDefault();
            let row = $(this).parents('tr');
            let id = row.data('id');
            let form = $('#form-user-delete');
            let url = form.attr('action').replace(':USER_ID', id);
            let data = form.serialize();

            $.ajax({
                url:url,
                type:'DELETE',
                data:data,
                success: function(result){
                    // Efface ligne du tableau
                    $('.user_'+id).fadeOut();
                    // Affichage du message avec lib Notif.js
                    $('#message_info').append(notie.alert(3, result.message, 5));
                },
                error: function(){
                    sweetAlert('Oups...', 'Une erreur est survenue', 'error');
                }
            });
        });
    }


}