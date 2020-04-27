<?php
  session_start();
  if(isset($_SESSION['username']))
    unset($_SESSION['username']);
  session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>UniFinder</title>
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="javascript" type="text/javascript" href="Sscript.js">
</head>
<body>
  <div class="full-wraper" id="full-wrapper">
   <div class="wraper  hg" id="wrapper">
     <head>
      <div class="title-logo">
       <h2><a style="color: black;"href="index.php">UNIFINDER</a></h2>
       <p>Md Saifur Rahman</p>
      </div>
      <div class="login">
        <a id="login" href="signup.php">Sign Up</a>
       </div>
     </head>
   </div>
 </div>

  <div class="full-wraper" id="full-wrapper">
   <div class="wraper" id="wrapper">
    <nav>
       <div class="full-menu">
        <div class="menu">
          <ul id="menu-bar">
            <li><a class="nav-link" href="index.php">HOME</a></li>
            <li><a class="nav-link" href="dashbord.php">DASHBORD</a></li>
            <li><a class="nav-link" href="explore.php">EXPLORE</a></li>
            <li><a class="nav-link" href="about-us.php">ABOUT US</a></li>
          </ul>
        </div>
         
       </div>
     </nav>
    </div>
</div>
<div class="full-wraper" id="full-wrapper">
    <div class="wraper title-login" id="wrapper">
      	<div class="box">
      		<h3>LOGIN</h3>
          	<div class="social-container">
          			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          			<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
          			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          	</div>
          		<form action="login.php" method="POST">
          		<input class="input" type="text" name="Username" placeholder="Username" required><br>
          		<input class="input" type="password" name="Password" placeholder="Password" required><br>
          		<input class="button" type="submit" name="login" value="LOGIN">
          	  </form>
        </div>
    </div>
</div>

<!-- Footer part start -->
<div class="full-wraper" id="full-wrapper">
   <div class="wraper" id="wrapper">
      <footer id="foot">
         <p>&copy;Md Saifur Rahman</p>
         <p>Email: saifurrr240@gmail.com</p>
       </footer>
   </div>
 </div>
  <!-- Footer part end -->

  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="Login.js"></script>

</body>
</html>