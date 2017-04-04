<?php
  include_once 'dbutil.php';

  $welcome_message = "";

  if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user "
        . "WHERE username='". $username . "'"
        . "AND password='". $password . "' LIMIT 1";

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
      <div class="col-xs-12 col-sm-12 col-lg-6 col-lg-offset-2">
        <input type="text" class="form-control font-awesome-input" name="search_username" placeholder="&#xF002; Search Username" />
      </div>

      <div class="col-xs-12 col-sm-12 visible-xs visible-sm">
        <br />
      </div>

      <div class="col-xs-12 col-sm-12 col-lg-2">
        <input type="submit" name="search" class="btn btn-info btn-block" value="Search" />
      </div>
    </div>

    <div class="row search-content">
      <div class="col-lg-8 col-lg-offset-2">
        <table class="table table-hover table-bordered hidden-xs hidden-sm">
          <thead>
            <tr>
              <th>Task</th>
              <th>Date and Time started</th>
              <th>Status</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Build UI for AfterschoolPH test</td>
              <td>04/03/2017 19:08:47</td>
              <td>Pending</td>
            </tr>

            <tr>
              <td>Create database schema for normalization</td>
              <td>04/04/2017 17:53:20</td>
              <td>Pending</td>
            </tr>

            <tr>
              <td>Build log-in functionality</td>
              <td>04/04/2017 19:32:24</td>
              <td>Pending</td>
            </tr>
            
          </tbody>
        </table>

        <table class="table table-striped visible-xs visible-sm">
          <thead>
            <tr>
              <th>Task</th>
              <th>Date and Time started</th>
              <th>Status</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Build UI for AfterschoolPH test</td>
              <td>04/03/2017 19:08:47</td>
              <td>Pending</td>
            </tr>

            <tr>
              <td>Create database schema for normalization</td>
              <td>04/04/2017 17:53:20</td>
              <td>Pending</td>
            </tr>

            <tr>
              <td>Build log-in functionality</td>
              <td>04/04/2017 19:32:24</td>
              <td>Pending</td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>

  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  		<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>