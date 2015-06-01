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
<article>WELCOME! THIS PAGE IS ABOUT ME.</article>
<div class="container">
  <img class="img-responsive, img-circle"width="360" height="360"src="pics/me2.jpg">
  <p>Hi there, My is name is Joshua Smith. I am a PHP/CSS/JAVASCRIPT/HTML Progammmer.</br>I code for anybody and myself, I can play sports, put in work, and do service for pasadena.</br>Proin ut quam eros. Donec sed lobortis diam. Nulla nec odio lacus. Quisque porttitor egestas dolor in placerat.</br> Nunc vehicula dapibus ipsum. Duis venenatis risus non nunc fermentum dapibus. Morbi lorem ante, malesuada in mollis nec, auctor nec massa. Aenean tempus dui eget felis blandit at fringilla urna ultrices.</p>
</div>
</body>
    <script type="js/bootstrap.js"></script>
		<script type="js/jquery-2.1.1.min.js"></script>
		<script type="js/bootstrap.min.js"></script>
</html>