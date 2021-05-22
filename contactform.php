<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width initial scale 1.0">
	<title>contactform</title>
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

<section class="contact-us">
	<div class="texts">
		<h2>we are always ready to serve you!</h2>
		

	</div>
	<div class="contact-form">
 <form id="contact-form" method="post" action="">
    <input name="name" type="text" class="input-field" id="name" placeholder="your name" required><br>
    <input name="email" type="email" class="input-field" id="email" placeholder="your email" required><br>
    <input name="subject" type="text" class="input-field" id="subject" placeholder="subject"><br>

    <textarea name="message" type="text" class="input-field" id="message" placeholder="your message" required rows="10"></textarea> <br>

    <input type="submit" class="btn1" value="send message">

  </form>
</div>
</section>

<!<!---- footer----->
<footer class="footer">
	<h4>The Drive-in lebanon</h4>
		<p>Your help and motivation would be the first step for Drive in Lebanon <br>to aid  families and people in need. </p>

	<div class="social-media">
		
			<a href="https://www.instagram.com/thedriveinlebanon/" target="_blank"><i class="fa fa-instagram"></i></a>
			<a href="contactform.html" target="_blank"><i class="fa fa-envelope"></i></a>
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