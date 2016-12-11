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

	$("#send_password_reset_email_form").validate({
		rules: {
			email: {
				required: true,
				email: true
			}
		}
	});

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
});