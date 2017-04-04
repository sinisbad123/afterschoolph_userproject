<?php 
  include_once '../dbutil.php';

  $search_object = $_POST["search_data"];

  $query = "SELECT t.name, t.start_date, t.status FROM user u "
      . "inner join task t on u.id = t.user_id "
      . "WHERE u.username = '" . $search_object['username'] . "' "
      . "AND LOWER(t.status) = 'pending' "
      . "AND start_date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY "
      . "AND start_date < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY";

  $result = mysql_query($query);

  if (!$result) {
      $message  = 'Invalid query: ' . mysql_error() . "\n";
      $message .= 'Whole query: ' . $query;
      echo $message;
  } else {
    $rows = mysql_num_rows($result);
    $json_string = array();

    if ($rows > 0) {
      while($row = mysql_fetch_array($result)) {
        array_push($json_string, 
          array(
            'task_name' => $row['name'],
            'start_date' => $row['start_date'],
            'status' => $row['status']
          )
        );
      }

      echo json_encode($json_string);
    } else {
      $json_string = array(
        'status' => 'error',
        'message' => 'No pending task found.'
      );

      echo json_encode($json_string);
    }
  }

?>