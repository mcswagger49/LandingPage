<!DOCTYPE html>
<html>
<head>
	<title>WELCOME!</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/starwars.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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

<article>WELCOME! THESE ARE MY PROJECTS!</br>ENJOY!</article>
<img class="wrap, img-responsive, img-rounded"width="700" height="400"  src="pics/Blog.jpg">
<p class="wrap,right">This is my <a href="http://localhost/Blog/">Blog</a> project. The blog is one of my hardest project i tried to work on.</p>

<img class="wrap, img-responsive, img-rounded"width="700" height="400"  src="pics/awesomenauts.jpg">
<p class="wrap,right">This is my <a href="http://localhost/Awesomenauts/">Awesomenauts</a> game project. awesomnauts was probably our longest project I to worked on.</p>

<img class="wrap, img-responsive, img-rounded"width="700" height="400"  src="pics/Instagram.jpg">
<p class="wrap,right">This is my <a href="http://localhost/appacademyapi/">Instagram</a> project. The Instagam was a little bit more easier to complete, i till did my best to complete it.</p>

<img class="wrap, img-responsive, img-rounded"width="700" height="400"  src="pics/to-do-1.jpg">
<p class="wrap,right">This is my <a href="http://localhost/to-do-app/">To Do App</a> project. Was a bit easy to do and finish quick. </p>

<img class="wrap, img-responsive, img-rounded"width="700" height="400"  src="pics/to-do-2.jpg">
<p class="wrap,right">This is my <a href="http://localhost/to-do-app-2/">To Do App 2</a> project. This project took a while to edit but I came through toward the end.</p>
</body>
		<script type="js/bootstrap.js"></script>
		<script type="js/jquery-2.1.1.min.js"></script>
		<script type="js/bootstrap.min.js"></script>
</html>