 
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width initial scale 1.0">
	<title>Foodcourt</title>
	<link rel="stylesheet" href="style.css">
	<link href="http://fonts.cdnfonts.com/css/wandery-free" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

 </head>
<body>
<section class="res-sec1">
	<nav>

		<a href="index.php"> <img src= "images/logo.png" ></a>
		<div class="nav-links" id="navLinks">
			<i class="fa fa-times" onclick="hideMenu()" id="closeMen"></i>

		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="reservation.php">RESERVATION</a></li>
			<li><a href="foodcourt.php">FOODCOURT</a></li>
			<li><a href="donation.php">DONATION</a></li>
			<li><a href="login.php" class="btn1">sign-up</a></li>

		</ul>
		</div>	
		<i class="fa fa-bars" onclick="showMenu()" id="showMen"></i>
	</nav>



</section>
<!----food trucks----->
<section class="showing-this-week" >
<div class="text1">
	<h1>What is a movie without some snacks ? 
 </h1>
	<p>Choose your food and beverages from some <br> of the most exquisite Food trucks in Lebanon.</p>
</div> 
<div class="cards">
<div class="container">
	<div class="card">
		<div class="imgBx">
			<img src="images/1r.jpg">
		</div>
		<div class="content">
			<h2>the choice</h2>
			<p>we are a group of recent university Graduates with the core beilve that change starts with us The Drive-In Cinema will be every .</p>
			<a href="" class="btn1">see menu</a>
			<a href="ordernow.php" class="btn1">order now</a>


			
		</div>
	</div>


	<div class="card">
		<div class="imgBx">
			<img src="images/2r.jpg">
		</div>
		<div class="content">
			<h2>hunter killer</h2>
			<p>we are a group of recent university Graduates with the core beilve that change starts with us The Drive-In Cinema will be every .</p>
			<a href="" class="btn1">see menu</a>
			<a href="ordernow.php" class="btn1">order now</a>
			
		</div>
	</div>

	
</div>
</div>
<div class="cards">
<div class="container">
	<div class="card">
		<div class="imgBx">
			<img src="images/3r.jpg">
		</div>
		<div class="content">
			<h2>the choice</h2>
			<p>we are a group of recent university Graduates with the core beilve that change starts with us The Drive-In Cinema will be every .</p>
			<a href="" class="btn1">see menu</a>
			<a href="ordernow.php" class="btn1">order now</a>
		</div>
	</div>


	<div class="card">
		<div class="imgBx">
			<img src="images/4r.jpg">
		</div>
		<div class="content">
			<h2>hunter killer</h2>
			<p>we are a group of recent university Graduates with the core beilve that change starts with us The Drive-In Cinema will be every .</p>
			<a href="" class="btn1">see menu</a>
			<a href="ordernow.php" class="btn1">order now</a>
			
		</div>
	</div>

	
</div>
</div>


</section>

<!---- footer----->
<footer class="footer">
	<h4>The Drive-in lebanon</h4>
	<p>Your help and motivation would be the first step for Drive in Lebanon <br>to aid  families and people in need. </p>
	<div class="social-media">
		
			<a href="https://www.instagram.com/thedriveinlebanon/" target="_blank"><i class="fa fa-instagram"></i></a>
			<a href="contactform.html" ><i class="fa fa-envelope"></i></a>
			<a href="tel:+961 70 44 74 76" target="_blank"><i class="fa fa-phone"></i></a>
			<a href="https://www.google.com/maps/dir/33.8545025,35.5218039/wagen+park+jbeil/@33.9882963,35.4465228,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x151f5caefceb3d83:0x3b2ac7c200f70c24!2m2!1d35.6456697!2d34.1233607" target="_blank"><i class="fa fa-map-marker"></i></a>


		
	</div>
	<p>copyright &copy;2021 <br>lebanese american university  </p>
</footer>

<!----java script lal menu--->
<script >
	var navLinks =document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right="0";

	}
	function hideMenu(){
		navLinks.style.right="-200px ";

	}
</script>
</body>
</html> 