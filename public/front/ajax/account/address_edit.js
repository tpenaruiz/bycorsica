$(document).ready(function(){

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
	
});