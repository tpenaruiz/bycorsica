$(document).ready(function(){
	$.validator.setDefaults({
		errorClass: 'help-block',
		highlight: function(element){
			$(element).closest('.form-group').addClass('has-error');
		},
		unhighlight: function(element){
			$(element).closest('.form-group').removeClass('has-error');
		}
	});

	$.validator.addMethod('strong_password', function(value, element){
		return this.optional(element) || value.length>=6 && /\d/.test(value) && /[a-z]/i.test(value);
	}, 'Your password must be at least 6 characters long and contain at least one number and char.');

	/**
     * Header
     * Validation du formulaire
     */
	$("#login_nav").validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			password: {
				required: true
			}
		}
	});

	/**
     * Page register
     * Validation formulaire
     */
	$("#register_form").validate({
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
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				strong_password: true
			},
			password_confirmation: {
				required: true,
				equalTo: "#id_password"
			}
		}
	});

	/**
     * Page password/reset
     * Validation formulaire
     */
	$("#send_password_reset_email_form").validate({
		rules: {
			email: {
				required: true,
				email: true
			}
		},
		
	});

	/**
     * Page password/reset/{token}
     * Validation formulaire
     */
	$("#reset_password_form").validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				strong_password: true
			},
			password_confirmation: {
				required: true,
				equalTo: "#id_password"
			}
		}
	});

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
     			date:  true
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
     				console.log("test ok");
     			},
     			error: function(){
     				console.log("test failed");
     			}
     		});
     	}
     });
});