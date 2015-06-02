<!DOCTYPE html>
<html>
<head>
	<title>CONTACT ME!</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/icons.css">
	<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body>

<nav class="menu">
  <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
  <label class="menu-open-button" for="menu-open">
    <span class="hamburger hamburger-1"></span>
    <span class="hamburger hamburger-2"></span>
    <span class="hamburger hamburger-3"></span>
  </label>
  
 <a href="https://instagram.com/kuroxsapparel/" class="menu-item"> <i class="fa fa-instagram"></i> </a>
  <a href="http://localhost/LandingPage/presenta.php" class="menu-item"> <i class="fa fa-plus-square"></i> </a>
  <a href="http://localhost/LandingPage/contact.php" class="menu-item"> <i class="fa fa-paper-plane"></i> </a>
  <a href="http://localhost/LandingPage/aboutme.php" class="menu-item"> <i class="fa fa-user"></i> </a>
  <a href="http://localhost/LandingPage/index.php" class="menu-item"> <i class="fa fa-home"></i> </a>


</nav>


<!-- filters -->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
      <filter id="shadowed-goo">
          
          <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
          <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
          <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
          <feOffset in="shadow" dx="1" dy="1" result="shadow" />
          <feBlend in2="shadow" in="goo" result="goo" />
          <feBlend in2="goo" in="SourceGraphic" result="mix" />
      </filter>
      <filter id="goo">
          <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
          <feBlend in2="goo" in="SourceGraphic" result="mix" />
      </filter>
    </defs>
</svg>
<article>WELCOME! THIS PAGE IS TO CONTACT ME.	</article>
 
<address>
Written by Joshua Smith.</br>
Email me at: joshsmith0419@gmail.com<br>
Try our clothing line at<a href="http://localhost/KUXS/"> Kuroxsclothing.com</a><br>
POST BOX OFFICE #### USA, San Gabriel, California  <br>
My instagram </br><a href="https://instagram.com/_jashhh/">_jashhh</a>
</address>

<div class="share-button">
    <div class="share-button-secondary">
      <div class="share-button-secondary-content">
        <a href="https://www.facebook.com">share with me on facebook</a>
      </div>
    </div>
    <div class="share-button-primary">
      <i class="share-button-icon fa fa-facebook"></i>
    </div>

  </div>
    <div class="share-button">
    <div class="share-button-secondary">
      <div class="share-button-secondary-content">
        <a href"=https://plus.google.com/">share with me on google+</a>
      </div>
    </div>
    <div class="share-button-primary">
      <i class="share-button-icon fa fa-google-plus"></i>
    </div>
  </div>
</div>
<form method="post" href=""><!--registering not using create-post not making one. -->
  <div>
    <label for="title">Name: </label><!-- labels the title -->
    <input type="text" name="title" />
  </div>

  <div>
     <label for="post">Email: </label><!-- label for the post textarea -->
     <textarea name="post"></textarea><!--spams more than one area -->
  </div>

  <div>
    <button type="submit">Submit</button><!-- Creates the submit butten-->
  </div>
</form>

</body>
    <script type="js/bootstrap.js"></script>
		<script type="js/jquery-2.1.1.min.js"></script>
		<script type="js/bootstrap.min.js"></script>
</html>


