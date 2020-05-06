<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>UniFinder</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php include 'header.php';?>
  <?php include 'menubar.php';?>
  <div class="container" id="deshboard-container">
      <p>
        <a href="reset.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
  </div>  
  <?php include 'footer.php';?>
  <script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

<!--
  <div class="full-wraper">
   <div class="wraper">
     
   </div>
 </div>
  -->