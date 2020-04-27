<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>UniFinder</title>
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="javascript" type="text/javascript" href="Sscript.js">
  <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />    
        
  <link rel="stylesheet" href="font/font.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</head>
<body>
  <div class="full-wraper" id="full-wrapper">
   <div class="wraper  hg" id="wrapper">
     <header id="header">
      <div class="title-logo">
       <h2><a style="color: black;"href="index.php">UNIFINDER</a></h2>
       <p>Md Saifur Rahman</p>
      </div>
      <div class="login">
        <a id="login" href="login.php">Log In</a>
        <a id="signup" href="signup.php">Sign Up</a>
       </div>
     </header>
   </div>
 </div>

  <div class="full-wraper" id="full-wrapper">
   <div class="wraper" id="wrapper">
    <nav>
       <div class="full-menu">
        <div class="menu">
          <ul id="menu-bar">
            <li id="active-home"><a id="menu-home" class="nav-link" href="index.php">HOME</a></li>
            <li id="active-dashbord"><a id="menu-dashbord" class="nav-link" href="deshboard.php">DASHBORD</a></li>
            <li id="active-explore"><a id="menu-explore" class="nav-link" href="explore.php">EXPLORE</a></li>
            <li id="active-about"><a id="menu-about"class="nav-link" href="aboutus.php">ABOUT US</a></li>
          </ul>
        </div>
         
       </div>
     </nav>
    </div>

<!-- Slidebar part start -->
  <div class="full-wraper"  id="full-wrapper">
    <div class="wraper" id="wrapper">
         

      <div class="full-wraper bg">
      <div class="wraper slider">
        <section>
          <div class="section">
            <div class="slider-wrapper theme-dark">
                    <div id="slider" class="nivoSlider">
                        <img src="img/toystory.jpg" data-thumb="img/toystory.jpg" alt="" />
                
                        <a href="http://dev7studios.com"><img src="img/up.jpg" data-thumb="img/up.jpg" alt="" title="This is an example of a caption" /></a>
                
                        <img src="img/walle.jpg" data-thumb="img/walle.jpg" alt="" data-transition="slideInLeft" title="this is my caption"/>
                
                        <img src="img/nemo.jpg" data-thumb="img/nemo.jpg" alt="" title="#htmlcaption" />
                
                    </div>

                    <div id="htmlcaption" class="nivo-html-caption">
                        This is sweet caption
                    </div>

                </div>
          </div>
        </section>
      </div>
     </div>
  
     <!-- Slidebar part end -->

     <!-- Slidebar script part start -->

    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    </div>
  </div>
 </div>
 <!--slider script end here-->
 
 <!--article start  here-->

 <div class="full-wraper" id="full-wrapper">
     <div class="wraper" id="wrapper">
      <article id="article">
        <h1>Your Future Starts Here</h1>
        <p>Whether you are applying to university For the first time<br>Or<br>looking to complete your degree.<br><a style="color: blue;" href="aboutus.php">Unifinder</a> will make it easy for you...</p><br>
        <a id="a" style="color: blue;" href="login.php">APPLY NOW</a><br>
        <h3>Explore Nearly 500+ University Using UniFinder.</h3><br>
         <div class="searchbar"> 
        <input id="homeinput-searchbar" type="text" name="">
        <button id="level-search">SEARCH</button>
        </div>
      </article>
     </div>
 </div>
 <!--article end here-->

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
</body>
</html>

<!--
  <div class="full-wraper" id="full-wrapper">
   <div class="wraper" id="wrapper">

   </div>
 </div>
  -->