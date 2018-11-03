<?php
   include('session.php');
?>
<html>
<head>
<title>facfacts</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<style>
h1 {
    text-decoration: underline;
   }
div.b {
 line-height: 1.6;
}

body
{
background-image:
  linear-gradient(to bottom, rgba(255,255,0,0.5), rgba(0,0,255,0.5)),
  url("https://blog.turbotax.intuit.com/wp-content/uploads/2010/12/books.jpg");
    background-size:cover;
   background-repeat:no-repeat;
}
h1 {
     color: white;
    }

.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }
{box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container>div {
  max-width: 100%;
  height:500px;
  position: relative;
  margin: auto;
}

.slideshow-container > div > img {
    height: 100%;
    width: 100%;
}
/* Number text (1/8 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 500px) {
  .text {font-size: 11px}
}
figure {
    display: inline-block;
    border: 1px dotted gray;
   padding:3px;
}
figure img {
    vertical-align: left;
}
figure figcaption {
    text-align: center;
}
.thumbnail img {
    height:250px;
    width:320px;
}
* {
    box-sizing: border-box;
}
.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
a.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
 -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
}

a.button:hover {background-color: #3e8e41}

a.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

@media screen and (max-width:480px){
    body{
        background: blue;
    }
}
@media screen and (max-width:480px)
{
    .column,.thumbnail img{width:100%;
    height:"auto";
    float:none
    margin:0%;
    justify-content: space-between;}
}
</style>
</head>
<body link="black">
<h1  align="center"><a name="faculty"></a>FACULTY DETAILS</h1>
<div align="right">
<a >WELCOME ADMIN |</a>
<a href="#contact">HELP |</a>
<a href="#about">ABOUT US |</a>
<a href ="logout.php">Sign Out</a>
</div>
</br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 8</div>
  <img src="https://images.static-collegedunia.com/public/college_data/images/campusimage/14815252921446285037MU_NEW.jpg" style"="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 8</div>
  <img src="http://d2r2ijn7njrktv.cloudfront.net/apnlive/uploads/2017/11/Pune.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 8</div>
  <img src="https://i.ndtvimg.com/i/2017-11/anna-university_650x400_51509962450.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">4/ 8</div>
  <img src="https://educationiconnect.com/wp-content/uploads/backup/2016/08/BBA-Colleges-in-Gujarat.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 8</div>
  <img src="https://img.collegepravesh.com/2017/05/SPCE-Mumbai.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 8</div>
  <img src="https://static-collegedunia.com/public/college_data/images/appImage/14947_SPITM.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">7/ 8</div>
  <img src="https://www.dtcc.edu/sites/default/files/styles/panopoly_image_original/public/georgetown-campus.jpg?itok=bkujetiq" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">8/ 8</div>
  <img src="https://schoolbook.getmyuni.com/assets/images/rev_img/53570__29574/1513269822PRINCE-HOSTEL-VELTECH.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<h2>UNIVERSITIES</h2>
<div class="row">
<div class="column">
<figure>
<div class="thumbnail">
<img src="http://www.lncollege.edu.in/images/mumbai%20university.png" 
alt="wp-content/uploads/2016/06/unilogo1" style="width=100%"
/>
<figcaption>
<h3>
<p align="center">
<a >MUMBAI UNIVERSITY</a>
</br>
</br>
<a  href="Mumbai1.php" class="button">Go to The directory</a>
</div>
</div>
</h3>
</p>
</figcaption>
</figure>
<div class="column">
<figure>
<div class="thumbnail">
<img src="http://www.unipune.ac.in/uop_files/uop_logo.jpg" 
alt="wp-content/uploads/2016/06/unilogo1" style="width=100%"
/>
<figcaption>
<h3>
<p align="center">
<a >PUNE UNIVERSITY</a>
</br>
</br>
<a href="Pune1.php" class="button">Go to The directory</a>
</div>
</div>
</h3>
</p>
</figcaption>
</figure>
<div class="column">
<figure>
<div class="thumbnail">
<img src="https://www.aucetk.edu.in/style/Anna.jpg" 
alt="wp-content/uploads/2016/06/unilogo1" style="width=100%"
/>
<figcaption>
<h3>
<p align="center">
<a >ANNA UNIVERSITY</a>
</br>
</br>
<a href="Anna1.php"class="button">Go to The directory</a>
</div>
</div>
</div>
</h3>
</p>
</figcaption>
</figure>
<div class="row">
<div class="column">
<figure>
<div class="thumbnail">
<img src="https://www.careerindia.com/img/2012/05/18-vjtimumbai.jpg" 
alt="wp-content/uploads/2016/06/unilogo1" style="width=100%"
/>
<figcaption>
<h3>
<p align="center">
<a>VJTI UNIVERSITY</a>
</br>
</br>
<a href="Vjti1.php"class="button">Go to The directory</a>
</div>
</div>
</h3>
</p>
</figcaption>
</figure>
<div class="column">
<figure>
<div class="thumbnail">
<img src="https://static-collegedunia.com/public/college_data/images/logos/1394788586Sardar%20Patel%20College%20of%20Engineering.png" 
alt="wp-content/uploads/2016/06/unilogo1" style="width=100%"
/>
<figcaption>
<h3>
<p align="center">
<a>SPCE UNIVERSITY</a>
</br>
</br>
<a href="Spce1.php" class="button">Go to The directory</a>
</div>
</div>
</h3>
</p>
</figcaption>
</figure>
<div class="column">
<figure>
<div class="thumbnail">
<img src="https://www.campusoption.com/images/colleges/logos/24_11_17_104201_Logo.jpg" 
alt="wp-content/uploads/2016/06/unilogo1" style="width=100%"
/>
<figcaption>
<h3>
<p align="center">
<a>SPIT UNIVERSITY</a>
</br>
</br>
<a href="Spit1.php"class="button">Go to The directory</a>
</div>
</div>
</div>
</h3>
</p>
</figcaption>
</figure>
<div class="row">
<div class="column">
<figure>
<div class="thumbnail">
<img src="https://smedia2.intoday.in/aajtak/images/stories/042016/dtu,_delhi_official_logo_650_042116010615.jpg" 
alt="wp-content/uploads/2016/06/unilogo1" style="width=100%"
/>
<figcaption>
<h3>
<p align="center">
<a>DELTECH UNIVERSITY</a>
</br>
</br>
<a href="Deltech1.php"class="button">Go to The directory</a>
</div>
</div>
</h3>
</p>
</figcaption>
</figure>
<div class="column">
<figure>
<div class="thumbnail">
<img src="https://i1.wp.com/blog.raoiit.com/wp-content/uploads/2017/11/vit_logo_approved-821562994-1510314862879.jpg?resize=533%2C574&ssl=1" 
alt="wp-content/uploads/2016/06/unilogo1" style="width=100%"
/>
<figcaption>
<h3>
<p align="center">
<a>VIT UNIVERSITY</a>
</br>
</br>
<a href="Vit1.php"class="button">Go to The directory</a>
</div>
</div>
</div>
</h3>
</p>
</figcaption>
</figure>
</div>
</div class ="b">
</br>
<div class="b" >
<h1  align="left" style="font-size:30px;color:Black"><a name="about"></a>ABOUT US</h1>
<hr>
<h2>
<p style="font-size:20px">Our website facfacts has been specifically designed to provide users with faculty info under various universities.<br>
This a one stop solution for all your queries regarding faculties.<br>
Hope so you  have a good experience.<br>
Regards,<br>
facfacts team
</p>
<p><a href="#faculty">Back to top</a></p>
</h2>
</br>
<h1  align="left" style="font-size:30px;color:Black"><a name="contact"></a>CUSTOMER SUPPORT</h1>
<hr>
<h2>
<p style="font-size:20px">
CUSTOMER CARE HELPLINE NUMBER:+912224561744<br>
MOBILE NUMBER:+919821665432<br>
FOR ANY FURTHER QUERIES EMAIL US AT <a href="homepg.html">facfacts@gmail.com</a>
</p>
<h2><a href="#faculty">Back to top</a></h2>
</h2>
</div>
</body>
</html>  