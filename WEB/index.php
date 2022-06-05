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
<title>Made For You &bull; Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="canonical" href="https://madeforyou.glitch.me/">
<meta name="copyright" content="(c) Copyright DevsAPP">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="375">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#fff">
<meta http-equiv="cleartype" content="on">
<meta name="theme-color" content="#36393f">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="Made For You - Home">
<meta property="og:site_name" content="https://madeforyou.glitch.me/">
<meta property="og:description" content="DevsAPP">
<meta name="description" content="Made For You ">
<meta property="og:image" content="Logo.png" />
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="https://madeforyou.glitch.me/">
<meta name="twitter:title" content="Made For You &bull; Home">
<meta name="twitter:description" content="DevsAPP">
<meta name="google-site-verification" content="">
</head>
<body>
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
      <li class="nav-list-item"><a href="design.php" class="nav-link">Design</a></li>
      <li class="nav-list-item" > <a href="support.html" class="nav-link">Support</a></li>
      <li class="nav-list-item"><a href="feedback.html" class="nav-link">Feedback</a></li>
      <li class="nav-list-item"><a href="usefullinks.html" class="nav-link">Useful links</a></li>
      <li class="nav-list-item"><a href="prime.html" class="nav-link">PrimeSoon</a></li>
      <li class="nav-list-item"><a href="logout.php" class="nav-link">Logout</a></li>

    </ul>
  </nav>
</div>
<ul class="menu">
  
  <!-- pc -->
<li><a href="design.php" target="_blank" >Design</a></li>  
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




<body>

<section>

  <div class="full-height" >
    <div class="section-title-wrap">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center parallax-fade-top">
            <p>Made For You</p>
            <h1>Website For</h1>      <br>      
          <h1>  <code style="color: hotpink;" >D</code> <code style="color:yellow;" >E</code> <code style="color:red;" >S</code> <code style="color:navajowhite;" >I</code> <code style="color: skyblue;" >G</code> <code style="color:springgreen;" >N</code> </h1>

            <p style="font-size: 13px"> Users <b  id="odometer" class="odometer">0</b> Websites <b  id="odometer2" class="odometer">0</b></p>
      <div class='buttons flex'>
                    <a class='button btn btn-blurple' href='https://www.facebook.com/MhmdEsamm9'><span><i class="fab fa-facebook-f"></i> FaceBook </span></a>
                    <a class='button btn btn-blurple' href='design.html'><span><i class="fab fa-dev" aria-hidden="true"></i> Design</span></a>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>




<div class="content-container">
        <div id="os2" class="product-row">
          <div class="product-image"><img src="Who am i.png"></div>
          <div class="product-text">
            <h2 class="product-title">Who am i?</h2>
            <p style="color:salmon">Hello how are you? I will help you create your website easily, and not just like that. I will help you learn programming, all in one click.</p>
          </div>
        </div>
        <div class="product-row">
          <div class="product-image"><img src="Community.png"></div>
          <div class="product-text">
            <h2 class="product-title">Community</h2>
              <p style="color:hotpink">Our society is large and wide, and there are those who need us to help him in some of his work so that it can be accomplished quickly. we claim <code>DevsAPP</code></p>
          </div>
        </div>

        <div class="product-row">
          <div class="product-image"><img src="Why us.png"></div>
          <div class="product-text">
            <h2 class="product-title">Why us</h2>
            <p style="color: skyblue">Because we are a trusted source and we will achieve everything you want ASAP. Trust me, you will not regret trusting us</p>
          </div>
        </div>
        <div class="product-row">
          <div class="product-image"><img src="Tired of waiting.png"></div>
          <div class="product-text">
            <h2 class="product-title">Tired of waiting</h2>
            <p style="color:limegreen">Well, let's get started on your first project with just click on <a style="color:orange" href="design.html">Design</a> </p>
          </div>
        </div>
        
<div style="padding-top: 100px"></div>
  </div>


</section>



</body>





</div>
  <!-- السي اس اس الصفحه  -->
<style>

#myBtn {
position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

#myBtn i {
color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}


#myBtn:hover {
background: rgba(0, 0, 0, 0.9);
}
.btn {
  border: none;
  margin: 10px;
  color: #ffffff;
  cursor: pointer;
  font-size: 16px;
  padding: 10px 30px;
  border-radius: 5px;
  display: inline-block;
  background-color: var(--secondary-color);
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
  transition: all 0.5s;
}

.btn {
  border: none;
  margin: 10px;
  color: #ffffff;
  cursor: pointer;
  font-size: 16px;
  padding: 10px 30px;
  border-radius: 5px;
  display: inline-block;
  background-color: var(--secondary-color);
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
  transition: all 0.5s;
}

.btn-blurple {
  background-color: #7289da;
}
.btn-default {
  background-color: #2f2f2f;
}

.btn i {
  top: 3px;
  font-size: 125%;
  margin: 0 4px 0 0;
  position: relative;
}
#myBtn:hover i {
    color: #fff;
    top: 5px;
}

/* #images
================================================== */


img {
  max-width: 100%;
  width: 100%;
  height: auto;
  border-radius: 0.6em;
}
@keyframes hover {
  0%   {top: 0px;}
  50%  {top: 50px;}
  100% {top: 0px;}
}
.content-container {
  width: 100%;
  max-width: 1150px;
  padding: 0 20px;
  margin: 0 auto;
}
.product-row {
  padding: 120px 0 0;
  height: 60vh;
  -webkit-box-align: center;
          align-items: center;
}
.product-row .product-image {
  width: 70%;
  margin: 0 auto;
  animation: goUpandDown 5s ease-in-out infinite; 
}
/* .product-row .product-image:hover {
  transform: scale(1.1);
} */

@keyframes goUpandDown {
  0% {
    -webkit-transform: translatey(+60px);
            transform: translatey(+60px);
  }
  50% {
    -webkit-transform: translatey(+80px);
            transform: translatey(+80px);
  }
  100% {
    -webkit-transform: translatey(+60px);
            transform: translatey(+60px);
  }
}


.product-row .product-text {

  background: transparent;
  width: 90%;
  margin: 10px auto;
  text-align: center;
}
.product-row .product-title {
  font-size: 2em;
  color: #ffffff;
  font-weight: 700;
}
.product-row p {
  line-height: 1.5;
  font-size: 1.2em;
}
.product-row {
  margin: 1em 0;
}

.product-row::after {
  content: "";
  display: block;
  clear: both;
  float: none;
}
.product-row:nth-child(odd) {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: reverse;
          flex-direction: row-reverse;
}
@media only screen and (min-width: 800px) {

.product-row:nth-child(odd) .product-image {
    padding-left: 5%;
    padding-right: 0;
  }
.product-row {
    display: -webkit-box;
    display: flex;
    margin-bottom: 0;
    min-height: 380px;
    -webkit-box-align: center;
            align-items: center;
  }
.product-row .product-image {
    width: 55%;
    float: left;
    -webkit-box-flex: 1;
            flex: 1 1 55%;
    padding-right: 5%;
    max-width: 55% !important;
    min-width: 320px;
  }
.product-row .product-text {
    position: relative;
    width: 45%;
    text-align: left;
    float: right;
    -webkit-box-flex: 1;
            flex: 1 1 45%;
    max-width: 45%;
  }
.product-row .product-text {
    margin-right: 1em;
  }
}




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
.fourth {
  height: 45px;
  width: 250px;
  border: 2px solid #ffffff;
  color: #fff;
  background-image: linear-gradient(45deg, #ffffff 50%, transparent 50%);
  background-position: 100%;
  background-size: 400%;
  -webkit-transition: background 300ms ease-in-out;
  transition: background 300ms ease-in-out;
}
.fourth:hover {
  background-position: 0;
}
.section {
  position: relative;
  width: 100%;
  display: block;
}
.over-hide {
  overflow: hidden;
}
.full-height {
  height: 100vh;
}
.login-button {
  position: relative;
  display: inline-block;
  float: right;
  margin-top: 37px;
  margin-right: 10px;
}

.shadow-title {
  position: fixed;
  top: 0;
  margin-top: 30px;
  left: 20px;
  width: 100%;
  height: 300%;
  text-align: left;
  font-family: "Muli", sans-serif;
  -webkit-writing-mode: vertical-lr;
  writing-mode: vertical-lr;
  font-size: 18vw;
  line-height: 1;
  color: rgba(200, 200, 200, 0.1);
  background: linear-gradient(
    90deg,
    rgba(200, 200, 200, 0),
    rgba(200, 200, 200, 0.35)
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: 900;
  z-index: -1;
}
@keyframes comeUp {
    from {
        opacity: 0;
        bottom: -50px;
    }
}
.section-parallax {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: cover;
  z-index: -2;
}
button:focus { outline: none; }
.section.z-bigger {
  z-index: 100;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  font-size: 25px;
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: -3px;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.section.z-bigger-2 {
  z-index: 200;
}
.section-title-wrap {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  transform: translateY(-50%);
  z-index: 3;
}
.section-title-wrap p {
  letter-spacing: 2px;
  font-size: 1.7em;
  font-weight: 700;
  padding: 0;
  color: #ffffff;
}
.section-title-wrap h1 {
  margin: 0;
  padding: 0;
  font-size: 3.5vw;
  letter-spacing: 8px;
  font-weight: 900;
  color: #fff;
  line-height: 1;
  text-transform: uppercase;
}
.padding-top-bottom {
  padding-top: 100px;
  padding-bottom: 100px;
}
.background-dark {
  background-color: #ffffff;
}
</style>
<br>
<br>

<script>
// ===== Scroll to Top ==== 
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<button id="return-to-top"><i class="icon-chevron-up"></i></button>

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<div id="mobileScreen">


<footer>
  <nav class="footer-inner">
    <section class="footer-item">
      <h1>Made For You</h1>
      
      <h2>It is a site that helps you own your first software project so you can learn with us <br>Enjoy it</h2>
      <br>
    </section>
        
    <section class="footer-item">
      <h3>Useful links</h3>
        <ul>
          <li><a href="policy.html">Policy</a></li>
          <li><a href="faq.html">FAQ</a></li>
        </ul>
    </section>
          
    <section class="footer-item">
    <h3>&nbsp;</h3>
    <ul>
          <li><a href="team.html">Team</a></li>
          <li><a href="embeds.html">Embeds</a></li>
        </ul>
  
    </section>
            
    <section class="footer-item">

    </section>
        
    <section class="footer-item">
        <h3>Contact</h3>
        <p><i class="far fa-envelope" style="font-size:16px"></i> <a href="support.html">Support</a> <br><a href="https://www.facebook.com/MhmdEsamm9/">or here</a></p>
    </section>
        


      <section class="footer-item">
  <div class="hover">

  </div>

    </section> 
  </nav>

</footer>

<div class="ready">
  <button class="right" onclick="PopupCenter('https://www.facebook.com/MhmdEsamm9', 'Follow Now', 500, 666)">Follow Me</button>

    <p><b style="font-size: 20px"> Ready to made your own site </b><br>
  Dont forget Follow my facebook for support.</p>
  </div>

  </div>

<style>

#return-to-top {
    border:none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 1px;
    top: 1px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}



.right{
position: absolute;
right: 0;
margin-right: 80px;
background-color: #7289da;
border: 2px solid #7289da;
color: #fff;
display: inline-block;
font-family: Whitney, "Open Sans", Helvetica, sans-serif;
font-weight: 400;
font-size: 11pt;
border-radius: 3px;
cursor: pointer;
height: 45px;
width: 250px;
box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.2);
}
.right:active {
  transform: translateY(2px);
}
.right:hover {
  transform: translateY(1px);
}
.ready{
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 120px;
}
footer {
    background-color: #222222;
    font-family: "Lato", sans-serif;
    padding: 85px 0 285px 0;
    border: 5px solid #2f2f2f;
    border-radius: 5px;
    margin-left: 80px;
    
    margin-right: 80px;
    
}

.footer-inner {
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 120px;
    max-width: 1170px;
    position: relative;
}

.footer-item {
    float: left;
    margin: 0 7.2% 0 0;
}

.footer-item:nth-of-type(4) {
    display: none;
}

.footer-item:nth-of-type(7) {
    float: right;
    margin-right: 0;
}

.footer-button {
    color: white;
    position: relative;
    font-weight: 400;
    font-size: 16px;
    transition: 1s;
    transition-delay: .2s;
    padding: 14px;
}
  
.footer-button:after {
    content: "";
    position: absolute;
    top: 45px;
    right: 13px;
    background-color: white;
    height: 1px;
    width: 86px;
    transition: .6s;
}
  
.footer-button:hover {
    color: black;
    background-color: white;
}
  
.footer-button:hover:after {
    width: 112px;
    right: 0px;
}

h1 {
    font-weight: 900;
    color: white;
    font-size: 24px;
    letter-spacing: 2px;
    margin: 0;
    padding-bottom: 10px;
}
  
h2 {
    font-weight: 300;
    line-height: 1.8;
    font-size: 13px;
    color: #d1d1d1;
    letter-spacing: 0.03em;
    padding: 15px 0 0 0;
}
  
.color {
    color: white;
    font-weight: 400;
}
  
h3 {
    font-weight: 400;
    font-size: 13px;
    color: white;
    margin: 0;
    padding-bottom: 9px;
    letter-spacing: 0.03em;
}

h3.desktop {
    padding-top: 30px;
}
  
ul {
    line-height: 1.8;
    list-style-type: none;
    padding: 0;
}
  
li {
    font-weight: 300;
    font-size: 13px;
    color: #d1d1d1;
    letter-spacing: 0.03em;
}
  
p {
    font-weight: 300;
    font-size: 13px;
    padding: 0;
    line-height: 1.8;
    letter-spacing: 0.03em;
}
  
a {
    text-decoration: none;
    color: #d1d1d1;
}
  
a:hover {
    color: white;
}
  
.desktop {
    display: auto;
}

.footer-inner:after {
    content: "© 2021 DevsAPP, All rights reserved"; 
    font-weight: 300;
    letter-spacing: 0.03em;
    font-size: 13px;
    color: #d1d1d1;
    position: absolute;
    top: 260px;
    clear: both;
    display: block;
}

@media (max-width: 1024px) {
  
footer {
    padding: 50px 0 70px 0 !important;
}

.footer-inner {
    border-bottom: 1px solid #333;
    padding-bottom: 490px;
    margin-bottom: 50px;
}

.footer-item {
    margin: 0 0 42px 0;
    width: 50%;
}

.footer-item:nth-of-type(1) {
    border-bottom: 1px solid #333;
    padding-bottom: 32px;
    float: none;
    width: 100%;
}

.footer-item:nth-of-type(2) {
    clear: both;
}

.footer-item:nth-of-type(4) {
    clear: both;
    display: block;
}

.footer-item:nth-of-type(6) {
    clear: both;
}

.footer-item:nth-of-type(7) {
    clear: both;
    float: left;
    margin: 20px 0 0 -13px;
}

.desktop {
    display: none;
}

.footer-inner:after {
    top: 730px;
}
}

.hover {
width:200px;
height: 200px;
background-position: center;
background-size: cover;
position: relative;
background-image: url('Logo.png');
animation: hover 3s infinite linear;
} 
@keyframes hover {
  0%   {top: 0px;}
  50%  {top: 80px;}
  100% {top: 0px;}
}
#mobileScreen {
display: block;
}

@media only screen and (max-width: 1024px) {
  #mobileScreen {
    display: none;
  }
}
</style>
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
</html>
