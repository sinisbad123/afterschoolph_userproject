<?php 
  session_start();

  if (isset($_SESSION['username'])) {
    session_unset(); 
    session_destroy(); 
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
  <div class="login-background"></div>
 
  <div class="row index-content">
    <div class="col-xs-10 col-xs-offset-1 col-lg-4 col-lg-offset-4">
      <div class="col-xs-12 col-lg-10 col-lg-offset-1 panel-box">

        <form id="login_form" action="search.php" method="post">
          <h4 class="text-center">Log-in Page</h4>
          <p class="text-primary text-center">Please log-in to continue.</p>

          <input id="usr_username" type="text" name="username" class="form-input form-control font-awesome-input" placeholder="&#xf2bd; Username">
          <input id="usr_password" type="password" name="password" class="form-input form-control font-awesome-input" placeholder="&#xf084; Password">

          <p id="error_message" class="text-danger text-center">Please fill in the fields</p>
          <input id="enter" type="submit" class="form-enter btn btn-success btn-block" name="enter" value="Log-in">
        </form>

      </div>
    </div>
  </div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
	</body>
</html>