<?php 
	include_once 'dbutil.php';	

	$usr_object = $_POST["user_data"];

	$query = "SELECT * FROM user "
			. "WHERE username='". $usr_object['username'] . "'"
			. "AND password='". $usr_object['password'] . "'";

	$result = mysql_query($query);

	if (!$result) {
	    $message  = 'Invalid query: ' . mysql_error() . "\n";
	    $message .= 'Whole query: ' . $query;
	    echo $message;
	} else {
		$rows = mysql_num_rows($result);

		if ($rows > 0) {
			$json_string = array(
				'status' => 'success',
				'message' => 'Welcome'
			);

			echo json_encode($json_string);
		} else {
			$json_string = array(
				'status' => 'error',
				'message' => 'No account found.'
			);

			echo json_encode($json_string);
		}
	}

?>