$(document).ready(function() {
	var error_container = $('#error_message');
	error_container.hide();


	$('form').submit(function(e) {
		e.preventDefault();
		var self = this;
		var error_container = $('#error_message');

		var username = $('#usr_username').val().trim();
		var password = $('#usr_password').val().trim();

		if (username != '' && password != '') {
			
			var usr_object = {
				username: username,
				password: password,
			};

			$.ajax({
			   url: 'login_api.php',
			   data: {user_data: usr_object},
			   type: 'POST',
			   success: function(response) {
			   	var response_data = jQuery.parseJSON(response);
	      		var status = response_data.status;

	      		if (status == 'success') {
	      			error_container.removeClass('text-danger');
	      			error_container.addClass('text-primary');
	      			error_container.html('Welcome back ' + username);
	      			error_container.show();
	      			self.submit();
	      		} else {
	      			error_container.removeClass('text-primary');
	      			error_container.addClass('text-danger');
	      			error_container.html(response_data.message);
	      			error_container.show();
	      		}
			   }
			});
			
		} else {
			var error_container = $('#error_message');

			error_container.show();
			error_container.html('Please fill in the fields');
		}
	});
});



