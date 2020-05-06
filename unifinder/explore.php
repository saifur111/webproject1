<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>UniFinder</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/explore.css">
</head>
<body>
  <?php include 'header.php';?>
  <?php include 'menubar.php';?>
  <div class="container" >
      <div class="full-wraper">
          <div class="wraper">
              <div id="explore">
                  <div class="header-left">
                      <h2>Explore Universities</h2>
                  </div>
                  <div class="header-right">
                      <input id="explore-search-textbar" type="text" name="explore-search-text" placeholder=" Enter university name, city or area" style="width: 454px;">
                  </div>
                      <div class="header-right">
                      <input id="explore-search-submitbar" type="submit" name="explore-search-button" style="width: 125px;">
                  </div>
              </div>
          </div>
      </div>
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