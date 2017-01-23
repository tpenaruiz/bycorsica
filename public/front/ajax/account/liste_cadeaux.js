/**
 * Created by bilel on 22/01/2017.
 */
$(document).ready(function(){
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