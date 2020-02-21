<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<meta charset="utf-8"><!-- Encoding-->
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,shrink-to-fit=no">
    <!-- Enabling responsiveness -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css">
</head>
	<style type="text/css">
		.bg{
	background-image: url(img/bg.png);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}
/*images*/
#img1{
	width: 6%;
	height:10%;
	border-radius:100%;
	background-color: blue;
	margin-top:-90px;
	position:absolute;
}


/*links*/
a {
	text-decoration: none;
	color: white;	
	font-size: 25px;
	padding-bottom:20px;
}
a:hover {
	background: inherit;
	color: #996800; 
}
.a1{
	height: 40px;
	width: 40px;

}
.a2{
	height: 40px;
	width: 40px;
	border-radius: 20px;
}

/*navigation bar*/
.topnav {
  background-color:grey;
  margin-left: -8px;
  margin-right:-8px;
  overflow: hidden;
  text-align: center;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size:20px;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}


/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}


.container {
  max-width:400px;
  width:100%;
  margin:0 auto;
  position:relative;
  padding-top:-20px;


}


#fill {
  background-color:rgba(0,0,255,0.1);
  padding:25px;
  margin:50px 0;

}

#fill h3 {
  color: #f57f17;
  display: block;
  font-size: 30px;
  font-weight: 400;
  margin-top:-10px;
}

.fieldset1 {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
  height: 40%;
}

#fill input[type="text"], #fill input[type="email"], #fill input[type="tel"], #fill input[type="url"],#fill input[type="password"], #fill textarea {
  width:93%;
  border:1px solid #CCC;
  background:#FFF;
  margin:0 0 5px;
  padding:10px;
}
#fill input[type="text"]:hover, #fill input[type="email"]:hover, #fill input[type="tel"]:hover, #fill input[type="url"]:hover,#fill input[type="password"]:hover #fill textarea:hover {
  -webkit-transition:border-color 0.3s ease-in-out;
  -moz-transition:border-color 0.3s ease-in-out;
  transition:border-color 0.3s ease-in-out;
  border:1px solid #AAA;
}

#fill textarea {
  height:100px;
  max-width:100%;
  resize:none;
}
#fill button[type="submit"] {
  cursor:pointer;
  width:100%;
  border:none;
  background:#0CF;
  color:#FFF;
  margin:0 0 5px;
  padding:10px;
  font-size:15px;
}

#fill button[type="submit"]:hover {
  background:#09C;
  -webkit-transition:background 0.3s ease-in-out;
  -moz-transition:background 0.3s ease-in-out;
  transition:background-color 0.3s ease-in-out;
}

#fill button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#fill input:focus, #fill textarea:focus {
  outline:0;
  border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
::-ms-input-placeholder {
 color:#888;
}

span{
	color:blue;
	font-size:20px;
	float: right;
}

* {box-sizing: border-box}

.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: solid black;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background-color: black;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */


/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: black;
  font-size: 12px;
  padding: 5px 5px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}



/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
	</style>
<body class="bg">
	
	
	<div class="topnav" id="myTopnav" style="margin-top:-10px">
		<a href="index.php" >Home</a> &nbsp &nbsp &nbsp 
		
		<a href="contact.php" >Contact Us</a>&nbsp &nbsp &nbsp

		<a href="index.php">Logout</a>

  		<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  	</div>
	

		

<center style="margin-top: -20px"><h1 style="color:blue">Discount!!!&nbsp<i style="font-size:70px;color: red">50%</i></h2></center>


	<div class="slideshow-container">

		<div class="mySlides">
  			
  			<center><img src="img/pic1.jpg" style="width:30%"><br><i style="font-size: 30px">Red Heels</i><b style="background-color: yellow;font-size:35px">¢100</b></center>

  		</div>

		<div class="mySlides">
  			
  			<center><img src="img/pic2.jpg" style="width:30%"><br><i style="font-size: 30px">Bracelets</i><b style="background-color: yellow;font-size:35px">¢25</b></center>

  		</div>

		<div class="mySlides">
  			
  			<center><img src="img/pic3.jpg" style="width:30%"><br><i style="font-size: 30px">Travelling Bag</i><b style="background-color: yellow;font-size:35px">¢250</b></center>

  		</div>

  		<div class="mySlides">
  			
  			<center><img src="img/pic4.jpg" style="width:30%"><br><i style="font-size: 30px">Summer Straw</i><b style="background-color: yellow;font-size:35px">¢100</b></center>

  		</div>

  		<div class="mySlides">
  			
  			<center><img src="img/pic5.jpg" style="width:30%"><br><i style="font-size: 30px">Back Pack</i><b style="background-color: yellow;font-size:35px">¢200</b></center>

  		</div>

  		<div class="mySlides">
  			
  			<center><img src="img/pic6.jpg" style="width:30%"><br><i style="font-size: 30px">Alligator Briefcase</i><b style="background-color: yellow;font-size:35px">¢300</b></center>

  		</div>

  		<div class="mySlides">
  			
  			<center><img src="img/pic7.jpg" style="width:30%"><br><i style="font-size: 30px">Malaysian Jewelery</i><b style="background-color: yellow;font-size:35px">¢150</b></center>

  		</div>

  		<div class="mySlides">
  			
  			<center><img src="img/pic8.jpg" style="width:30%"><br><i style="font-size: 30px">Toiletry Bag</i><b style="background-color: yellow;font-size:35px">¢250</b></center>

  		</div>

  		<div class="mySlides">
  			
  			<center><img src="img/pic9.jpg" style="width:30%"><br><i style="font-size: 30px">Wedding Ring</i><b style="background-color: yellow;font-size:35px">¢2000</b></center>

  		</div>

  		<div class="mySlides">
  			
  			<center><img src="img/pic10.jpg" style="width:30%"><br><i style="font-size: 30px">Cute Ladies bag</i><b style="background-color: yellow;font-size:35px">¢200</b></center>

  		</div>

  		<div class="mySlides">
  			
  			<center><img src="img/pic11.jpg" style="width:30%"><br><i style="font-size: 30px">Mens Bracelets</i><b style="background-color: yellow;font-size:35px">¢60</b></center>

  		</div>

  		<div class="mySlides">
  			
  			<center><img src="img/pic12.jpg" style="width:30%"><br><i style="font-size: 30px">Mens Shoes</i><b style="background-color: yellow;font-size:35px">¢150 for each</b></center>

  		</div>

  		<div class="mySlides">
  			
  			<center><img src="img/pic13.jpg" style="width:30%"><br><i style="font-size: 30px">Gucci Set</i><b style="background-color: yellow;font-size:35px">¢500</b></center>

  		</div>

		
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


		
	
		





	<script type="text/javascript" src="script.js"></script>
  
</body>
</html>
