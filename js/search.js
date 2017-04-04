$(document).ready(function() {
	var error_container = $('#error-container');
	var error_message = $('#error_message');
	var loading_container = $('#loading-container');
	var search_result = $('#search_result');

	//tables for easy access for later
	var result_table = $('#result_table');
	var sm_result_table = $('#sm_result_table');

	//Hide elements initially
	search_result.hide();
	error_container.hide();
	loading_container.hide();

	$('form').submit(function(e) {
		e.preventDefault();
		loading_container.show();

		var username = $('#username').val().trim();

		if (username != '') {
			var search_object = {
				username: username,
			};

			$.ajax({
			   url: 'api/search_api.php',
			   data: {search_data: search_object},
			   type: 'POST',
			   success: function(response) {
			   	var response_data = jQuery.parseJSON(response);
			   	console.log('fetching...', response_data);

			   	
			   	if (Array.isArray(response_data)) {
			   		//destroy and refresh tables
			   		result_table.bootstrapTable('destroy');
			   		sm_result_table.bootstrapTable('destroy');

			   		result_table.bootstrapTable({
				        data: response_data,
				    });

				    sm_result_table.bootstrapTable({
				        data: response_data,
				    });

				    search_result.show();
				    error_container.hide();
			   	} else {
			   		if (response_data.status == 'error') {
			   			search_result.hide();
			   			error_container.show();
			   			error_message.html(response_data.message);
			   		}
			   	}

			   	loading_container.hide();
			   }
			});
		} else {
			search_result.hide();
   			error_container.show();
   			error_message.html('Please input a username.');
		}

		loading_container.hide();
	});
});