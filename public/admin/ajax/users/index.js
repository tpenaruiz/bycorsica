$(document).ready(function(){
    $('#create').on('click', function(e){
        e.preventDefault();
        let form = $('#form-create');
        let url = form.attr('action');
        let data = form.serialize();

        $.post(url, data, function(result){
            // Close Modal
            $('#createUser').modal('toggle');

            // Afficher l'information sur une autre ligne du tableau HTML
            $.each(result.info, function(){
                $('.custab tr:last').next(
                    '<tr class=usersLinter_'+this.id+'data-id='+this.id+'>' +
                        '<td> '+this.id+' </td>' +
                        '<td> '+this.roles.libelle+' </td>' +
                        '<td> '+this.villes.libelle+' </td>' +
                        '<td> '+this.nom+' </td>' +
                        '<td> '+this.email+' </td>' +
                        '<td> '+this.prenom+' </td>' +
                        '<td> '+this.date_naissance+' </td>' +
                        '<td> '+this.status+' </td>' +
                        '<td> '+this.derniere_connexion+' </td>' +
                        '<td> '+this.created_at+' </td>' +
                        '<td> Action </td>' +
                    '</tr>'
                );
            });

            // Affichage du message avec notiJs
            $('#message_info').append(notie.alert(1, result.message, 5));
        });
    });
})