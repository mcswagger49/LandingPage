<!DOCTYPE html>
<html>
<head>
	<title>ABOUT ME!</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/custom-style.css">
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
  
  <a href="https://instagram.com/kuroxsapparel/" class="menu-item"> <i class="fa fa-thumbs-o-up"></i> </a>
  <a href="http://localhost/LandingPage/presenta.php" class="menu-item"> <i class="fa fa-music"></i> </a>
  <a href="http://localhost/LandingPage/contact.php" class="menu-item"> <i class="fa fa-envelope"></i> </a>
  <a href="http://localhost/LandingPage/aboutme.php" class="menu-item"> <i class="fa fa-group"></i> </a>
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
<article>WELCOME! THIS PAGE IS TOO GET KNOW WHO I AM.</article>
<div class="container">
  <p>container</p>
  <div class="row">
      <p>row</p>
      <div class="col-xs-10"></div>
        <p>col-xs-10</p>
        <div class="row">
          <p>row</p>
            <div class="col-xs-3"></div>
            <div class="col-xs-9"></div>
          </div>
          <div class="row">
            <p>row</p>
             <div class="col-xs-3"></div>
             <div class="col-xs-9"></div>
          </div>
      <div class="col-xs-2"></div>
        <p>col-xs-2</p>
  </div>
</div>
</body>
    <script type="js/bootstrap.js"></script>
		<script type="js/jquery-2.1.1.min.js"></script>
		<script type="js/bootstrap.min.js"></script>
</html>