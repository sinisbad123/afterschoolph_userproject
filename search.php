<?php
  include_once 'dbutil.php';

  session_start();

  $welcome_message = "";

  if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    $query = "SELECT * FROM user "
        . "WHERE username='". $_SESSION['username'] . "'"
        . "AND password='". $_SESSION['password'] . "' LIMIT 1";

    $result = mysql_query($query);

    if ($result) {
      while ($row = mysql_fetch_assoc($result)) {
          $welcome_message = "Welcome " . $row['name'] . "!";
      }
    }
  } else if (isset($_SESSION['username'])) {
    $query = "SELECT * FROM user "
        . "WHERE username='". $_SESSION['username'] . "'"
        . "AND password='". $_SESSION['password'] . "' LIMIT 1";

    $result = mysql_query($query);

    if ($result) {
      while ($row = mysql_fetch_assoc($result)) {
          $welcome_message = "Welcome " . $row['name'] . "!";
      }
    }
  }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>AfterschoolPH | User Management System</title>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://rawgit.com/wenzhixin/bootstrap-table/master/src/bootstrap-table.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
    <div class="header">
    </div>

    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-2">
        <h2><?php echo $welcome_message; ?></h2>
      </div>
    </div>

    <div class="row search-panel">
      <form>
        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-2">
          <input id="username" type="text" class="form-control font-awesome-input" name="username" placeholder="&#xF002; Search Username" />
        </div>

        <div class="col-xs-12 col-sm-12 visible-xs visible-sm">
          <br />
        </div>

        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-lg-2 col-lg-offset-0">
          <input type="submit" name="search" class="btn btn-info btn-block" value="Search" />
        </div>
      </form>
    </div>

    <div id="loading-container" class="row give-space">
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
        <p class="loading-message"><span><img src="img/loading.gif" /></span> Fetching records...</p>
      </div>
    </div>

    <div id="error-container" class="row give-space">
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
        <p id="error_message" class="error-message text-center">The database got tired, please try again later.</p>
      </div>
    </div>

    <div id="search_result" class="row search-content">
      <div class="col-lg-8 col-lg-offset-2">
        <table id="result_table" class="table table-hover table-bordered hidden-xs hidden-sm">
          <thead>
            <tr>
              <th data-field="task_name">Task</th>
              <th data-field="start_date">Date and Time started</th>
              <th data-field="status">Status</th>
            </tr>
          </thead>
        </table>

        <table id="sm_search_result" class="table table-striped visible-xs visible-sm">
          <thead>
            <tr>
              <th data-field="task_name">Task</th>
              <th data-field="start_date">Date and Time started</th>
              <th data-field="status">Status</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>

  		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="https://rawgit.com/wenzhixin/bootstrap-table/master/src/bootstrap-table.js"></script>
  		<script type="text/javascript" src="js/search.js"></script>
	</body>
</html>