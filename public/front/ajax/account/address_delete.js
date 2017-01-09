$(document).ready(function(){

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
	
});