<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon"
    type="Logo.png"
    href="https://cdn.glitch.me/4a056743-d853-4bac-8293-6b6fd32c95de%2FLogo.png?v=1636520514320">
<title>Made For You &bull; Design</title>
<link rel="stylesheet" type="text/css" href="style.css">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="canonical" href="###">
<meta name="copyright" content="(c) Copyright DevsAPP">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="375">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#fff">
<meta http-equiv="cleartype" content="on">
<meta name="theme-color" content="#36393f">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="Made For You &bull; Design">
<meta property="og:site_name" content="###">
<meta property="og:description" content="DevsAPP">
<meta name="description" content="Made For You ">
<meta property="og:image" content="Logo.png" />
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="###">
<meta name="twitter:title" content="Made For You &bull; Design">
<meta name="twitter:description" content="DevsAPP">
<meta name="google-site-verification" content="">
</head>
    <body> 
      
      
      
<section>

<div class="full-height" >
  <div class="section-title-wrap">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center parallax-fade-top">
                <br>      
    
          <p style="position: fixed; top: 82%; left: 49%; font-size: 23px; " > Designs <b  id="odometer2" class="odometer">1</b></p>

        </div>
      </div>
    </div>
  </div>
</div>
</section>
      
      <style>
        
.odometer {
font-size: 13px;
}
.odometer.odometer-auto-theme, .odometer.odometer-theme-default {
display: inline-block;
vertical-align: middle;
*vertical-align: auto;
*zoom: 1;
*display: inline;
position: relative;
font-size: 13px;
}
.odometer.odometer-auto-theme .odometer-digit, .odometer.odometer-theme-default .odometer-digit {
display: inline-block;
vertical-align: middle;
*vertical-align: auto;
*zoom: 1;
*display: inline;
position: relative;
font-size: 13px;
}
.odometer.odometer-auto-theme .odometer-digit .odometer-digit-spacer, .odometer.odometer-theme-default .odometer-digit .odometer-digit-spacer {
display: inline-block;
vertical-align: middle;
*vertical-align: auto;
*zoom: 1;
*display: inline;
visibility: hidden;
font-size: 13px;
}
.odometer.odometer-auto-theme .odometer-digit .odometer-digit-inner, .odometer.odometer-theme-default .odometer-digit .odometer-digit-inner {
text-align: left;
display: block;
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
overflow: hidden;
font-size: 13px;
}
.odometer.odometer-auto-theme .odometer-digit .odometer-ribbon, .odometer.odometer-theme-default .odometer-digit .odometer-ribbon {
display: block;
}
.odometer.odometer-auto-theme .odometer-digit .odometer-ribbon-inner, .odometer.odometer-theme-default .odometer-digit .odometer-ribbon-inner {
display: block;
-webkit-backface-visibility: hidden;
}
.odometer.odometer-auto-theme .odometer-digit .odometer-value, .odometer.odometer-theme-default .odometer-digit .odometer-value {
display: block;
-webkit-transform: translateZ(0);
}
.odometer.odometer-auto-theme .odometer-digit .odometer-value.odometer-last-value, .odometer.odometer-theme-default .odometer-digit .odometer-value.odometer-last-value {
position: absolute;
}
.odometer.odometer-auto-theme.odometer-animating-up .odometer-ribbon-inner, .odometer.odometer-theme-default.odometer-animating-up .odometer-ribbon-inner {
-webkit-transition: -webkit-transform 2s;
-moz-transition: -moz-transform 2s;
-ms-transition: -ms-transform 2s;
-o-transition: -o-transform 2s;
transition: transform 2s;
}
.odometer.odometer-auto-theme.odometer-animating-up.odometer-animating .odometer-ribbon-inner, .odometer.odometer-theme-default.odometer-animating-up.odometer-animating .odometer-ribbon-inner {
-webkit-transform: translateY(-100%);
-moz-transform: translateY(-100%);
-ms-transform: translateY(-100%);
-o-transform: translateY(-100%);
transform: translateY(-100%);
}
.odometer.odometer-auto-theme.odometer-animating-down .odometer-ribbon-inner, .odometer.odometer-theme-default.odometer-animating-down .odometer-ribbon-inner {
-webkit-transform: translateY(-100%);
-moz-transform: translateY(-100%);
-ms-transform: translateY(-100%);
-o-transform: translateY(-100%);
transform: translateY(-100%);
}
.odometer.odometer-auto-theme.odometer-animating-down.odometer-animating .odometer-ribbon-inner, .odometer.odometer-theme-default.odometer-animating-down.odometer-animating .odometer-ribbon-inner {
-webkit-transition: -webkit-transform 2s;
-moz-transition: -moz-transform 2s;
-ms-transition: -ms-transform 2s;
-o-transition: -o-transform 2s;
transition: transform 2s;
-webkit-transform: translateY(0);
-moz-transform: translateY(0);
-ms-transform: translateY(0);
-o-transform: translateY(0);
transform: translateY(0);
}
.odometer.odometer-auto-theme, .odometer.odometer-theme-default {
font-family:sans-serif;
line-height: 1.1em;
}
.odometer.odometer-auto-theme .odometer-value, .odometer.odometer-theme-default .odometer-value {
text-align: center;
}

      </style>
      
      
        <script>

function randomNum2(min, max) {
return Math.floor(Math.random() * (max - min + 1)) + min;
}



var myInt = setInterval(function () {
var size = document.getElementById("size").value || `180000`;
var max2 = parseInt(size) + 2000
var random2 = randomNum2(parseInt(size), parseInt(max2));

odometer.innerHTML = random2
}, 2000);




</script>  
<script>

function randomNum(min, max) {
return Math.floor(Math.random() * (max - min + 1)) + min;
}

var myInt = setInterval(function () {

var size2 = document.getElementById("size2").value;
var max = parseInt(size2) + 10
var random = randomNum(parseInt(size2), parseInt(max));
odometer2.innerHTML = random

}, 2000);



</script> 
<!-- التعليمات الي تحت -->
<script src='https://github.hubspot.com/odometer/odometer.js'></script>
      
      
        <h1 style="position: fixed; top: 50%; left: 50%;">Soon</h1>
        <h2 style="position: fixed; top: 470px; left: 46%;"> Own Your Design Soon! </h2> 
      
        <script type="text/javascript">var preload = document.createElement('div'); preload.className = "preloader"; preload.innerHTML = '</div><div class="spinner"></div>'; document.body.appendChild(preload); window.addEventListener('load', function() { preload.className +=  ' fade'; setTimeout(function(){ preload.style.display = 'none'; },600); 
})</script>
<noscript>
<div class="no-js">
To view the page please enable javascript in your browser
</div></noscript>
<nav class="nav" role="navigation">
<span class="logo"><a href="https://madeforyou.glitch.me/" rel="noopener" aria-label="Open home page"><span class="name"><img src="Logo.png" alt="logo" style="width:40px;height:40px;vertical-align:middle; border-radius: 50%"></span></a></span>
<link rel="icon"
  type="Logo.png"
  href="Logo.png">
<div id="mobile">
<nav class="header__nav nav-bar">
  <div class="toggle-menu">
    <div class="line line1"></div>
    <div class="line line2"></div>
    <div class="line line3"></div>
  </div>
    <!-- phone -->
  <ul class="nav-list">
    <li class="nav-list-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-list-item" > <a href="support.html" class="nav-link">Support</a></li>
    <li class="nav-list-item"><a href="feedback.html" class="nav-link">Feedback</a></li>
    <li class="nav-list-item"><a href="prime.html" class="nav-link">PrimeSoon</a></li>
    <li class="nav-list-item"><a href="logout.php" class="nav-link">Logout</a></li>

  </ul>
</nav>
</div>
<ul class="menu">

<!-- pc -->
<li><a href="index.php" target="_blank" >Home</a></li>  
<li><a href="support.html"  target="_blank" >Support</a></li>
<li><a href="feedback.html"  target="_blank" >Feedback</a></li>
<li><a href="prime.html" target="_blank" >PrimeSoon</a></li>
<li><a href="logout.php" target="_blank">Logout</a></li>


</ul>


</nav>
<script>
var toggleButton = document.querySelector('.toggle-menu');
var navBar = document.querySelector('.nav-bar');
toggleButton.addEventListener('click', function () {
navBar.classList.toggle('toggle');
});
</script>
       <style>
@media (min-width: 950px) {
.nav li {
float: left;
}
.nav li a {
padding: 20px 30px;
}
.nav .menu {
clear: none;
float: right;
max-height: none;
}
.nav .menu-icon {
display: none;
}
}

.nav-bar {
border-top: 60px;
position: absolute;
background-color: #2f2f2f;
top: 0;
right: 100%;
height: 100vh;
width: 250px;
display: flex;
transition: position 2.9s;
-webkit-transition: position 2.9s;
-moz-transition: position 2.9s;
-ms-transition: position 2.9s;
-o-transition: position 2.9s;
}

.toggle {
left: 0;
box-shadow: 1px 0 15px 2px rgba(0, 0, 0, 0.4);

}

.toggle-menu {
position: fixed;
top: 20px;
right: 20px;
width: 40px;
height: 30px;
display: flex;
flex-direction: column;
justify-content: space-around;
  padding: 2px 2px 2px 3px;
border-radius: 5px;
cursor: pointer;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
-ms-border-radius: 5px;
-o-border-radius: 5px;
}

.line {
width: 100%;
height: 3px;
border-radius: 5px;
background-color: #fff;
transition: transform 0.2s ease-out;
-webkit-transition: transform 0.2s ease-out;
-moz-transition: transform 0.2s ease-out;
-ms-transition: transform 0.2s ease-out;
-o-transition: transform 0.2s ease-out;
}

.toggle .line1 {
background-color: #000000;
transform: scale(0.9) rotateZ(-45deg) translate(-6px, 4px);
}

.toggle .line2 {
display: none;
}

.toggle .line3 {
background-color: #000000;
transform: scale(0.9) rotateZ(45deg) translate(-6px, -4px);
}

.toggle .toggle-menu {
background-color: white;
}

.nav-list {
list-style: none;
}

.nav-list-item {
padding: 10px 0;
}

.nav-link {
color: #fff;
font-size: 22px;
text-decoration: none;
position: relative;
padding-bottom: 4px;
}

.nav-link::before {
position: absolute;
content: '';
left: 0;
bottom: 0;
width: 100%;
height: 1px;
background-color: #fff;
transform: scaleX(0);
transition: transform 0.4s ease-in-out;
transform-origin: left;
-webkit-transition: transform 0.4s ease-in-out;
-moz-transition: transform 0.4s ease-in-out;
-ms-transition: transform 0.4s ease-in-out;
-o-transition: transform 0.4s ease-in-out;
}

.nav-link:hover::before {
transform: scaleX(1);
}

#mobile {
display: none;
}

@media only screen and (max-width: 768px) {
#mobile {
  display: block;
}
}
</style>
<div class="blur" id="body-blur"></div>


<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous">
<div class="page-content">
<input style="display: none" type="text" value="0" id="size">
      <input style="display: none" type="text" value="0" id="size2">


          <script>
  function PopupCenter(e, n, t, i) {
      var o = void 0 != window.screenLeft ? window.screenLeft : screen.left,
          d = void 0 != window.screenTop ? window.screenTop : screen.top,
          c = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width,
          w = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height,
          r = c / 2 - t / 2 + o, h = w / 2 - i / 2 + d,
          s = window.open(e, n, "scrollbars=yes, width=" + t + ", height=" + i + ", top=" + h + ", left=" + r);
      window.focus && s.focus()
  }
</script>
<script>
$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      $('#return-to-top').fadeIn(200);    // Fade in the arrow
  } else {
      $('#return-to-top').fadeOut(200);   // Else fade out the arrow
  }
});
$('#return-to-top').click(function() {      // When arrow is clicked
  $('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
  }, 500);
});
</script>

</div>
<script src="index.js"></script>
        

    </body> 